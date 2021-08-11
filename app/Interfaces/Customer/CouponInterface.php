<?php


namespace App\Interfaces\Customer;


interface CouponInterface
{
    public function getActiveCoupons();

    public function isActive($coupon_id);

    public function getById($coupon_id);

    public function getByCouponCode($coupon_code);

}
