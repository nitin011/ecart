<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthenticatesAndRegistersCustomers;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesAndRegistersCustomers, ThrottlesLogins;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::CUSTOMER_HOME;

    public function showLoginForm()
    {
        return view('web.auth.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function getCredentials(Request $request)
    {
        return $request->only($this->loginUsername(), 'user_password');
    }

    public function loginUsername()
    {
        return property_exists($this, 'user_phone') ? $this->user_phone : 'user_phone';
    }

    public function login(Request $request)
    {
        $request->validate([
            'user_phone' => 'required',
            'user_password' => 'required|min:6'
        ],[
            'user_phone.required' => 'User email and phone no. is required.',
            'user_password.required' => 'Password is required.'
        ]);
        if (is_numeric($request->user_phone)) {
            $validator = Validator::make($request->all(), [
                'user_phone' => 'required|digits:10|exists:users,user_phone',
                'user_password' => 'required|min:6'
            ], [
                'user_phone.exists' => 'This Phone Number Not Exists'
            ]);
            $user = User::where('user_phone', $request->user_phone)->first();
        } else {
            $validator = Validator::make($request->all(), [
                'user_phone' => 'required|email|exists:users,user_email',
                'user_password' => 'required|min:6'
            ], [
                'user_phone.exists' => 'This Email id Not exist.'
            ]);
            $user = User::where('user_email', $request->user_phone)->first();
        }
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }if (is_null($user)) {
            return redirect()->back()->with('error', 'User Not exits in our record. Please, register first');
        }
        if (is_null($user->email_verified_at)) {
            return redirect()->back()->with('warning', 'Please Verify Your Email First. we have sent you an verification email.');
        }
        if (!is_null($user) && Hash::check($request->user_password, $user->user_password)) {
            Auth::guard('web')->login($user);
            $message = "Welcome " . auth()->guard('web')->user()->user_name;
            if ($request->has('checkout')){
                return redirect()->back();
            }
            return redirect()->intended('/')->with('success', $message);
        }
        $validator->after(function ($validator) {
            $validator->errors()->add('user_password', 'invalid Credentials');
        });
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        return back()->withInput($request->only('user_phone', 'remember'))->with('error', 'invalid Credentials');
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
