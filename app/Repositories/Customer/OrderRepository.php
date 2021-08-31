<?php


namespace App\Repositories\Customer;


use App\Interfaces\Customer\OrderInterface;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class OrderRepository implements OrderInterface
{

    public function getAll($perPage = null)
    {
        if (is_null($perPage))
            return Order::query()->where('user_id', auth()->user()->user_id)->orderBy('created_at', 'desc')->get();
        else
            return Order::query()->where('user_id', auth()->user()->user_id)->orderByDesc('created_at')->paginate($perPage);
    }

    public function store(array $requestData)
    {
        $delivery_date = is_null($requestData['delivery_date']) ? Carbon::now()->addDays(2)->toDateString() : $requestData['delivery_date'];
        $cartItems = \Cart::getContent();
        $requestData['store_id'] = $requestData['store_id'] ?? 0;
        $requestData['cart_id'] = $requestData['cart_id'] ?? 0;
        $requestData['price_without_delivery'] = \Cart::getTotal();
        $requestData['total_price'] = getCartTotal();
        $requestData['coupon_discount'] = (getCouponDiscount()['discount'] ?? (0.0));
        $requestData['coupon_id'] = (getCouponDiscount()['id'] ?? (0));
        $requestData['sub_total'] = \Cart::getSubTotal();
        $requestData['total_products_mrp'] = $this->getTotalProductsMRP($cartItems);
        $requestData['payment_method'] = 'online';
        $requestData['time_slot'] = $requestData['time_slot'] ?? 'Anytime';
        $requestData['delivery_date'] = Carbon::parse($delivery_date)->format('Y-m-d');
        $requestData['order_date'] = Carbon::now()->toDateString();
        $requestData['transaction_info'] = $requestData['transaction_info'] ?? null;
        return Order::create($requestData);
    }

    protected function getTotalProductsMRP($cartItems)
    {
        $amount = 0.0;
        foreach ($cartItems as $key => $item) {
            $amount += $item->associatedModel->mrp;
        }
        return $amount;
    }

}


