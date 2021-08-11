<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Traits\SendSms;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use SendSms;

    public function signUp(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'first_name' => 'required',
                'user_email' => 'required|email|unique:users,user_email',
                'user_phone' => 'required|unique:users,user_phone',
                'user_password' => 'required'
            ]);
            if ($validation->fails()) {
                $errs = $validation->messages()->toArray();
                $messages = [];
                if (isset($errs['user_name'])) {
                    $messages['user_name'] = $errs['user_name'][0];
                }
                if (isset($errs['user_email'])) {
                    $messages['user_email'] = $errs['user_email'][0];
                }
                if (isset($errs['user_phone'])) {
                    $messages['user_phone'] = $errs['user_phone'][0];
                }
                if (isset($errs['user_password'])) {
                    $messages['user_password'] = $errs['user_password'][0];
                }
                return ['status' => 0, 'message' => $messages, 'data' => []];
            }
            $requestData = $request->all();
            $requestData['user_password'] = Hash::make($request->user_password);
            $requestData['reg_date'] = Carbon::now()->toDateString();
            $requestData['access_token'] = Str::random();
            $requestData['remember_token'] = Str::random();
            $user = User::query()->create($requestData);
            return ['status' => 1, 'message' => 'Registration Successfully done.', 'data' => $user];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => $data ?? []];
        }
    }

    public function verifyPhone(Request $request)
    {
        $phone = $request->user_phone;
        $otp = $request->otp;
        $smsby = DB::table('smsby')
            ->first();
        if ($smsby->status == 1) {
            // check for otp verify
            $getUser = DB::table('users')
                ->where('user_phone', $phone)
                ->first();

            if ($getUser) {
                $getotp = $getUser->otp_value;

                if ($otp == $getotp) {
                    // verify phone
                    $getUser = DB::table('users')
                        ->where('user_phone', $phone)
                        ->update(['is_verified' => 1,
                            'otp_value' => NULL]);

                    $message = array('status' => 1, 'message' => "Phone Verified! login successfully");
                    return $message;
                } else {
                    $message = array('status' => 0, 'message' => "Wrong OTP");
                    return $message;
                }

            } else {
                $message = array('status' => 0, 'message' => "User not registered");
                return $message;
            }
        } else {
            $getUser = DB::table('users')
                ->where('user_phone', $phone)
                ->update(['is_verified' => 1,
                    'otp_value' => NULL]);
            $message = array('status' => 1, 'message' => "Phone Verified! login successfully");
            return $message;
        }
    }


    public function login(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'user_phone' => 'required|exists:users,user_phone',
                'user_password' => 'required'
            ]);
            if ($validation->fails()) {
                $errs = $validation->messages()->toArray();
                $messages = [];
                if (isset($errs['user_phone'])) {
                    $messages['user_phone'] = $errs['user_phone'][0];
                }
                if (isset($errs['user_password'])) {
                    $messages['user_password'] = $errs['user_password'][0];
                }
                return ['status' => 0, 'message' => $messages, 'data' => []];
            }
            $user = User::where('user_phone', $request->user_phone)->firstOrFail();
            if (is_null($user->access_token)) {
                $userUpdate['access_token'] = Str::random();
            }
            $userUpdate['device_id'] = $request->device_id ?? $user->device_id;
            $user->update($userUpdate);
            if (!Hash::check($request->user_password, $user->user_password)) {
                throw new \Exception('Invalid phone number or password.');
            }
            return ['status' => 1, 'message' => 'Login Successfully.', 'data' => $user];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => $data ?? []];
        }
    }

    public function myprofile(Request $request)
    {
        try {
            $user = User::where('user_id', $request->user_id)->firstOrFail();
            return ['status' => '1', 'message' => 'User Profile', 'data' => $user];
        } catch (\Exception $e) {
            return ['status' => '0', 'message' => 'User not found', 'data' => []];
        }

    }

    public function forgotPassword(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'user_phone' => 'required|exists:users,user_phone',
            ]);
            if ($validation->fails()) {
                $errs = $validation->messages()->toArray();
                $messages = [];
                if (isset($errs['user_phone'])) {
                    $messages['user_phone'] = $errs['user_phone'][0];
                }
                return ['status' => 0, 'message' => $messages, 'data' => []];
            }

            $token = Str::random(60);
            $user = User::query()->where('user_phone',$request->user_phone)->first();
            DB::table('password_resets')->insert(['email' => $user->user_email, 'token' => $token, 'created_at' => Carbon::now()]);

            Mail::send('customer.auth.passwords.email-template', ['token' => $token], function ($message) use ($user) {
                $message->from(env("MAIL_FROM_ADDRESS"));
                $message->to($user->user_email);
                $message->subject('Reset Password Notification');
            });
            return ['status' => 1, 'message' => 'Reset Password Email sent.', 'data' => []];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function verifyOtp(Request $request)
    {
        try {
            $user = DB::where('user_phone', $request->user_phone)
                ->firstOrFail();
            if ($request->otp == $user->otp_value) {
                $user->update([
                    'otp_value' => null,
                    'user_password' => $request->user_password,
                    'access_token' => is_null($user->access_token) ? Str::random() : $user->access_token
                ]);
                DB::table('password_resets')->where('email', $user->user_email)->delete();
                return ['status' => 1, 'message' => "Otp Matched Successfully", 'data' => $user];
            }
            throw new \Exception('Wrong OTP.');

        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function changePassword(Request $request)
    {
        $user_phone = $request->user_phone;
        $password = $request->user_password;

        $getUser = DB::table('users')
            ->where('user_phone', $user_phone)
            ->first();

        if ($getUser) {
            $updateOtp = DB::table('users')
                ->where('user_phone', $user_phone)
                ->update(['user_password' => $password]);

            if ($updateOtp) {
                $checkUser1 = DB::table('users')
                    ->where('user_phone', $user_phone)
                    ->first();

                $message = array('status' => '1', 'message' => 'Password changed', 'data' => [$checkUser1]);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'Something wrong', 'data' => []);
                return $message;
            }
        } else {
            $message = array('status' => 0, 'message' => "User not registered");
            return $message;
        }
    }


    public function editProfile(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'user_name' => 'sometimes',
                'user_email' => 'sometimes|email|unique:users,user_email',
                'user_phone' => 'sometimes|unique:users,user_phone',
            ]);
            if ($validation->fails()) {
                $errs = $validation->messages()->toArray();
                if (isset($errs['user_name'])) {
                    throw new \Exception($errs['user_name'][0]);
                }
                if (isset($errs['user_email'])) {
                    throw new \Exception($errs['user_email'][0]);
                }
                if (isset($errs['user_phone'])) {
                    throw new \Exception($errs['user_phone'][0]);
                }
            }

            $user_id = $request->user_id;
            $requestData = $request->all();
            if (is_null($request->user_name)
                && is_null($request->user_email)
                && is_null($request->user_phone)) {
                throw new \Exception('Something went wrong');
            }

            DB::table('users')
                ->where('user_id', $request->user_id)
                ->update($requestData);
            $Userdetails = DB::table('users')
                ->where('user_id', $user_id)
                ->first();
            return array('status' => 1, 'message' => 'Profile Updated', 'data' => $Userdetails);
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function user_block_check(Request $request)
    {
        $user_id = $request->user_id;
        $user = DB::table('users')
            ->select('block')
            ->where('user_id', $user_id)
            ->first();

        if ($user) {
            if ($user->block == 1) {
                $message = array('status' => '1', 'message' => 'User is Blocked');
                return $message;
            } else {
                $message = array('status' => '2', 'message' => 'User is Active');
                return $message;
            }
        } else {
            $message = array('status' => '0', 'message' => 'User not found');
            return $message;
        }

    }

}
