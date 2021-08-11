<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class UsernotificationController extends Controller
{
    public function notifications(Request $request)
    {
        try {
            $user = $request->user_id;
            $notifyby = DB::table('user_notification')
                ->where('user_id', $user)
                ->orderBy('noti_id')
                ->get();
            if ($notifyby) {
                return array('status' => 1, 'message' => 'Notifications List', 'data' => $notifyby);
            }
            throw new \Exception('Empty');
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }

    public function notificationSeen(Request $request)
    {
        try {
            DB::table('user_notification')->where('noti_id', $request->notification_id)->update(['read_by_user' => 1]);
            return array('status' => '1', 'message' => 'Read by user');
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }

    public function markAllAsRead(Request $request)
    {
        try {
            DB::table('user_notification')->where('user_id', $request->user_id)->update(['read_by_user' => 1]);
            return array('status' => 1, 'message' => 'Marked All as Read');
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }


    public function deleteAll(Request $request)
    {
        try {
            DB::table('user_notification')->where('user_id', $request->user_id)->delete();
            return array('status' => '1', 'message' => 'All Notifications are Deleted');
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }
}
