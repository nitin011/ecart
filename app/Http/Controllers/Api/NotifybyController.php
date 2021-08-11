<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class NotifybyController extends Controller
{
    public function notifyby(Request $request)
    {
        try {
            $user_id = $request->user_id;
            $notifyby = DB::table('notificationby')
                ->where('user_id', $user_id)
                ->first();
            if ($notifyby) {
                return array('status' => 1, 'message' => 'NotifyBy', 'data' => $notifyby);
            }
            throw new \Exception('Not Found');
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }


    public function updateOrCreateNotifyBy(Request $request)
    {

        try {

            $updated = DB::table('notificationby')->updateOrInsert([
                    'user_id' => $request->user_id
                ], [
                    'user_id' => $request->user_id,
                    'sms' => $request->sms,
                    'email' => $request->email,
                    'app' => $request->app
                ]);
                return ['status' => '0', 'message' => 'Updated Successfully', 'data' => $updated];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }
}
