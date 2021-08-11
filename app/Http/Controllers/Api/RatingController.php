<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class RatingController extends Controller
{
    public function review_on_delivery(Request $request)
    {
        try {
            $check = Order::where('order_id', $request->order_id)->firstOrFail();
            if (DB::table('delivery_rating')->where(['order_id' => $request->order_id, 'user_id' => $request->user_id])->exists()) {
                throw new \Exception('Your already Reviewed for this product.');
            }
            $review = DB::table('delivery_rating')
                ->insert(['order_id' => $request->order_id,
                    'user_id' => $request->user_id,
                    'rating' => $request->rating,
                    'dboy_id' => $check->dboy_id,
                    'description' => $request->description]);
            if ($review) {
                return array('status' => 1, 'message' => 'Reviewed successfully');
            }
            throw new \Exception('Please try again later');
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage());
        }

    }
}
