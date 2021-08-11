<?php


namespace App\Repositories\Customer;


use App\Models\Coupon;
use Carbon\Carbon;

class CouponRepository implements \App\Interfaces\Customer\CouponInterface
{

    public function getActiveCoupons()
    {
        return Coupon::where('start_date', '<=', Carbon::now()->toDateString())
            ->where('end_date', '>=', Carbon::now()->toDateString())->get();
    }

    public function isActive($coupon_id)
    {
        return Coupon::where('id', $coupon_id)->where('start_date', '<=', Carbon::now()->toDateString())
            ->where('end_date', '>=', Carbon::now()->toDateString())->exists()();
    }

    public function getById($coupon_id)
    {
        return Coupon::where('id', $coupon_id)->where('start_date', '<=', Carbon::now()->toDateString())
            ->where('end_date', '>=', Carbon::now()->toDateString())->firstOrFail();
    }

    public function getByCouponCode($coupon_code)
    {
        return Coupon::where('coupon_code', $coupon_code)->where('start_date', '<=', Carbon::now()->toDateString())
            ->where('end_date', '>=', Carbon::now()->toDateString())->firstOrFail();
    }
}
