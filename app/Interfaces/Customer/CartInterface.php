<?php


namespace App\Interfaces\Customer;


use App\Models\Coupon;

interface CartInterface
{
    public function insert($product_variant, $quantity);

    public function applyCoupon(Coupon $coupon);

    public function removeCoupon();

    public function deliveryCharge();

    public function tax();

    public function clearAllConditions();

    public function getConditionByType($type);

    public function removeConditionByType($type);
}
