<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Events\WelcomeCustomerUser;
use App\Http\Controllers\Controller;
use App\Interfaces\Customer\CustomerInterface;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $customerRepository;
    public $user_phone;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CUSTOMER_HOME;

    /**
     * Create a new controller instance.
     *
     * @param CustomerInterface $customerRepository
     */
    public function __construct(CustomerInterface $customerRepository)
    {
        $this->middleware('guest');
        $this->customerRepository = $customerRepository;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        if (auth()->guard('web')->check()) {
            return redirect()->route('customer.index')->with('warning', 'You already logged in.');
        }

        return view('customer.auth.register');
    }

    public function cleanString($phone)
    {
        // Strip all but numbers
        return trim(preg_replace('/^1|\D/', "", $phone));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $this->user_phone = $this->cleanString($data['user_phone']);
        $data['user_phone'] = $this->user_phone;
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'user_phone' => 'required|unique:users,user_phone',
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users,user_email'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'] ?? null,
            'user_email' => $data['user_email'],
            'user_phone' => $this->user_phone,
            'remember_token' => Str::random(32),
            'reg_date' => Carbon::now()->toDateString(),
            'user_password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());
        return redirect()->route('customer.index')
            ->with('success', 'Awesome! Your registration is almost done. Please visit you email Account further next process, Thanks.');
    }

    public function validateCustomerEmail($token): RedirectResponse
    {
        try {
            $user = User::query()->where('remember_token', $token)->firstOrFail();
            Auth::guard('web')->loginUsingId($user->user_id);
            $user->update(['email_verified_at' => Carbon::today()->toDateString()]);
            return redirect()->intended('/')->with('success', 'Welcome! Email Verified Successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
