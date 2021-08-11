<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ResetPasswordRequest;
use App\Models\Admin;
use App\Models\PasswordResets;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Validator;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;

    public function showResetForm(Request $request, $token = null)
    {
        if (!PasswordResets::where('token', $token)->firstOrFail()) {
            return abort(403, 'Unauthorized action.');
        }
        return view('admin.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function reset(ResetPasswordRequest $request)
    {
        $requestData = $request->all();
        $email = $requestData['email'];
        $admin = Admin::where('email', $email)->first();

        if ($admin) {
            $admin->update($requestData);
            PasswordResets::where('email', $email)->delete();
            Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route("admin.login")->with('success', 'Password Reset Successfully');
    }
}
