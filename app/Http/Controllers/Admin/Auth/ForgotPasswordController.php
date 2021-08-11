<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Events\ForgotPasswordEmail;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\CorporateUser;
use App\Models\PasswordResets;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('admin.auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $requestData = $request->all();
        // VALIDATION FOR FORGOT PASSWORD
        $email = $requestData['email'];
        $token = $random = Str::random(15);
        $admin = Admin::where('email', $email)->first();
        if (isset($admin)) {
            $reset_data = array('email' => $email, 'token' => $token, 'created_at' => date('Y-m-d'));
            $isEmailExist = PasswordResets::where('email', '=', $email)->exists();

            if ($isEmailExist) {
                PasswordResets::where('email', '=', $email)->update($reset_data);
            } else {
                PasswordResets::create($reset_data);
            }
            $reset_data['name'] = $admin['first_name'] . ' ' . (isset($admin['last_name']) ? $admin['last_name'] : '');
            $reset_data['reset_link'] = route('admin.password.reset', $token);
            event(new ForgotPasswordEmail($reset_data));

            return redirect()->back()->with('success', 'Email send successfully');
        } else {
            return redirect()->back()->with('error', 'User not exist');
        }
    }
}
