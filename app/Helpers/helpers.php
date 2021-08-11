<?php

use App\Models\Currency;
use Illuminate\Support\Facades\Session;

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'M d, Y h:i A')
    {
        if ($date != null) {
            return Carbon\Carbon::parse($date)->format($format);
        }
        return null;
    }
}

// Price Format front side
function formatPrice($price): string
{
    $currency = Currency::query()->firstOrCreate(['currency_sign' => '£'], ['currency_name' => 'Pound']);
    return $price == "" ? $currency->currency_sign . ' ' . sprintf("%.2f", 0) : $currency->currency_sign . ' ' . sprintf("%.2f", $price);
}


if (!function_exists('assetUrl')) {
    /**
     * Get the path to the public folder.
     *
     * @param string $path
     * @return string
     */
    function assetUrl($path = ''): string
    {
        return url(config('app.asset_url') . $path);
    }
}

/**
 * Get Order Status.
 */

if (!function_exists('getOrderStatus')) {
    function getOrderStatus($status_id, $order_id)
    {
        $status_history = \App\Models\OrderStatusHistory::where('order_id', $order_id)->where('status_id', $status_id)->first();

        if (is_null($status_history)) {
            return ['status' => false];
        }
        return [
            'status' => true,
            'data' => $status_history
        ];
    }
}

/**
 * Get Status list
 */
if (!function_exists('getStatusList')) {
    function getStatusList()
    {
        return \App\Models\Status::all()->pluck('title', 'id')->toArray();
    }
}
if (!function_exists('updateCartTotal')) {
    function updateCartTotal($delivery_charge)
    {
        $coupon = getCouponDiscount();
        $total = ((double)\Cart::getTotal() + (double)$delivery_charge->getValue()) - ($coupon['discount'] ?? (0.0));
        Session::forget('cart_total');
        Session::push('cart_total', $total);
    }
}
if (!function_exists('getCartTotal')) {
    function getCartTotal()
    {
        return Session::get('cart_total')[0] ?? (0.0);
    }
}

if (!function_exists('getCouponDiscount')) {
    function getCouponDiscount()
    {
        return (Session::exists('coupon')) ? Session::get('coupon')[0] : null;
    }
}

if (!function_exists('getProductVariantDiscountPercent')) {
    function getProductVariantDiscountPercent($price, $mrp)
    {
        return ($price / $mrp) * 100;
    }
}
