<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordResets;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function getPassword($token)
    {
        PasswordResets::query()->where('token', $token)->firstOrFail();
        return view('customer.auth.passwords.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,user_email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();
        if (!$updatePassword)
            return back()->withInput()->with('error', 'Invalid token!');
        $user = User::query()->where('user_email', $request->email)->firstOrFail();
            $user->update(['user_password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        Auth::guard('web')->login($user);
        return redirect()->route('customer.index')->with('success', 'Your password has been changed!');
    }
}
