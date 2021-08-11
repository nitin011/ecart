<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function getEmail()
    {

        return view('customer.auth.passwords.email');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,user_email',
        ]);
        $token = Str::random(60);
        DB::table('password_resets')->insert(['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]);
        Mail::send('customer.auth.passwords.email-template', ['token' => $token], function ($message) use ($request) {
            $message->from(env("MAIL_FROM_ADDRESS"));
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return view('customer.auth.verify', ['email' => $request->email])->with('success', 'We have e-mailed your password reset link!');
    }
}
