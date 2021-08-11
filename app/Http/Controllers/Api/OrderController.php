<?php

namespace App\Http\Controllers\Api;

use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Traits\SendMail;
use App\Traits\SendSms;

class OrderController extends Controller
{
    use SendMail;
    use SendSms;

    public function order(Request $request)
    {
        try {
            DB::beginTransaction();
            $requestData = $request->all();
            $delivery_date = Carbon::now()->addDays(2)->toDateString();
            $is_coupon_exists = (isset($request->coupon_id) && !is_null($request->coupon_id));
            $total = self::getTotal($request->items, $request->coupon_id ?? null);
            $coupon_discount = $is_coupon_exists ? $this->getCouponDiscount($total, $request->coupon_id) : 0.0;
            $variants_total_mrp = $this->getVariantsMRPTotal($request->items);

            $requestData['store_id'] = $requestData['store_id'] ?? 0;
            $requestData['cart_id'] = $requestData['cart_id'] ?? 0;
            $requestData['price_without_delivery'] = self::getVariantsPriceTotal($request->items);
            $requestData['total_price'] = $total;
            $requestData['coupon_discount'] = $coupon_discount;
            $requestData['coupon_id'] = $request->coupon_id ?? null;
            $requestData['sub_total'] = $variants_total_mrp - $total;
            $requestData['total_products_mrp'] = $variants_total_mrp;
            $requestData['payment_method'] = 'online';
            $requestData['time_slot'] = $requestData['time_slot'] ?? 'Anytime';
            $requestData['delivery_date'] = Carbon::parse($delivery_date)->format('Y-m-d');
            $requestData['order_date'] = Carbon::now()->toDateString();
            $requestData['transaction_info'] = $requestData['transaction_info'] ?? null;
            $order = Order::query()->create($requestData);
            foreach ($request->items as $item) {
                $variant = ProductVariant::query()->findOrFail($item['varient_id']);
                OrderItem::query()->create([
                    'order_id' => $order->order_id,
                    'product_variant_id' => $variant->varient_id,
                    'quantity_value' => ($item['quantity'] * $variant->quantity),
                    'quantity_unit' => $variant->unit,
                    'mrp' => $variant->mrp,
                    'price' => $variant->price,
                    'short_description' => $variant->short_description,
                    'description' => $variant->description,
                    'variant_image' => $variant->varient_image,
                    'extra_data' => json_encode($variant->toArray())
                ]);
            }
            DB::commit();
            return ['status' => 1, 'message' => 'Order Placed successfully.', 'data' => []];
        } catch (\Exception $e) {
            DB::rollBack();
            return ['status' => 0, 'message' => $e->getMessage(), []];
        }
    }

    protected function transactionStore(Request $request)
    {
        $requestData = $request->all();
        Transaction::create([
            'order_id' => $requestData['details']['order_id'] ?? null,
            'user_id' => auth()->user()->user_id,
            'transaction_id' => $requestData['details']['id'],
            'status' => $requestData['details']['status'],
            'payer' => $requestData['details']['payer']['payer_id'] ?? null,
            'details' => $requestData['transaction'],
        ]);
        return response()->json(['status' => true, 'message' => 'Transaction Stored.']);
    }

    protected function getTotal($varients, $coupon_id = null)
    {
        $total = self::getVariantsPriceTotal($varients);
        return $total - self::getCouponDiscount($total, $coupon_id);
    }

    protected function getCouponDiscount($total, $coupon_id = null)
    {
        try {
            if (!is_null($coupon_id)) {
                $coupon = Coupon::query()->findOrFail($coupon_id);
                throw_if(($coupon->cart_value > $total), new \Exception('Please add ' . ($coupon->cart_value - $total) . ' amount of items more to apply this coupon.'));

                if ($coupon->type == 'percentage') {
                    return ($coupon->amount * $total) / 100;
                }
            }
            return $coupon->amount ?? 0.0;
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    protected function getVariantsPriceTotal($variants)
    {
        $total = 0.0;
        foreach ($variants as $variant) {
            $total += (ProductVariant::find($variant['varient_id'])->price * $variant['quantity']);
        }
        return $total;
    }

    protected function getVariantsMRPTotal($variants)
    {
        $total = 0.0;
        foreach ($variants as $variant) {
            $total += (ProductVariant::find($variant['varient_id'])->mrp * $variant['quantity']);
        }
        return $total;
    }

    public function ongoing(Request $request)
    {
        $user_id = $request->user_id;
        $ongoing = DB::table('orders')
            ->leftJoin('delivery_boy', 'orders.dboy_id', '=', 'delivery_boy.dboy_id')
            ->where('orders.user_id', $user_id)
            ->where('orders.order_status', '!=', 'Completed')
            ->where('orders.payment_method', '!=', NULL)
            ->orderBy('orders.order_id', 'DESC')
            ->get();

        if (count($ongoing) > 0) {
            foreach ($ongoing as $ongoings) {
                $order = DB::table('store_orders')
                    ->leftJoin('product_varient', 'store_orders.varient_id', '=', 'product_varient.varient_id')
                    ->select('store_orders.*', 'product_varient.description')
                    ->where('store_orders.order_cart_id', $ongoings->cart_id)
                    ->orderBy('store_orders.order_date', 'DESC')
                    ->get();


                $data[] = array('order_status' => $ongoings->order_status, 'delivery_date' => $ongoings->delivery_date, 'time_slot' => $ongoings->time_slot, 'payment_method' => $ongoings->payment_method, 'payment_status' => $ongoings->payment_status, 'paid_by_wallet' => $ongoings->paid_by_wallet, 'cart_id' => $ongoings->cart_id, 'price' => $ongoings->total_price, 'del_charge' => $ongoings->delivery_charge, 'remaining_amount' => $ongoings->rem_price, 'coupon_discount' => $ongoings->coupon_discount, 'dboy_name' => $ongoings->boy_name, 'dboy_phone' => $ongoings->boy_phone, 'data' => $order);
            }
        } else {
            $data = array('data' => []);
        }
        return $data;
    }


    public function cancel_for(Request $request)
    {
        $cancelfor = DB::table('cancel_for')
            ->get();

        if ($cancelfor) {
            $message = array('status' => '1', 'message' => 'Cancelling reason list', 'data' => $cancelfor);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'no list found', 'data' => []);
            return $message;
        }
    }


    public function delete_order(Request $request)
    {
        try {
            $order_id = $request->order_id;
            $user = DB::table('orders')
                ->where('order_id', $order_id)
                ->first();
            $user_id1 = $user->user_id;
            $userwa1 = DB::table('users')
                ->where('user_id', $user_id1)
                ->first();
            $reason = $request->cancelling_reason;
            $order_status = 'Cancelled';
            $updated_at = Carbon::now();
            $order = DB::table('orders')
                ->where('order_id', $order_id)
                ->update([
                    'cancelling_reason' => $reason,
                    'order_status' => $order_status,
                    'updated_at' => $updated_at]);

            if ($order) {
                if ($user->payment_method == 'COD' || $user->payment_method == 'Cod' || $user->payment_method == 'cod') {
                    $newbal1 = $userwa1->wallet + $user->paid_by_wallet;
                } else {
                    if ($user->payment_status == 'success') {
                        $newbal1 = $userwa1->wallet + $user->rem_price + $user->paid_by_wallet;
                    } else {
                        $newbal1 = $userwa1->wallet;
                    }
                }
                DB::table('users')
                    ->where('user_id', $user_id1)
                    ->update(['wallet' => $newbal1]);
                return array('status' => '1', 'message' => 'order cancelled', 'data' => $order);
            }
            throw new \Exception('something went wrong');
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }


    public function top_selling(Request $request)
    {
        try {
            $topSelling = Product::with(['variants', 'category'])
                // ->orderBy('count', 'desc')
                ->inRandomOrder()
                ->limit(10)
                ->get();
            return array('status' => '1', 'message' => 'Top selling products', 'data' => $topSelling);
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }


    public function whatsnew(Request $request)
    {
        $current = Carbon::now();
        $lat = $request->lat;
        $lng = $request->lng;
        $cityname = $request->city;
        $city = ucfirst($cityname);
        $nearbystore = DB::table('store')
            ->select('store_id', DB::raw("6371 * acos(cos(radians(" . $lat . "))
                    * cos(radians(store.lat))
                    * cos(radians(store.lng) - radians(" . $lng . "))
                    + sin(radians(" . $lat . "))
                    * sin(radians(store.lat))) AS distance"))
            ->where('store.del_range', '>=', 'distance')
            ->where('store.city', $city)
            ->orderBy('distance')
            ->first();
        if ($nearbystore) {
            $new = DB::table('store_products')
                ->join('product_varient', 'store_products.varient_id', '=', 'product_varient.varient_id')
                ->join('product', 'product_varient.product_id', '=', 'product.product_id')
                ->Leftjoin('deal_product', 'product_varient.varient_id', '=', 'deal_product.varient_id')
                ->select('store_products.store_id', 'store_products.stock', 'product_varient.varient_id', 'product.product_id', 'product.product_name', 'product.product_image', 'product_varient.description', 'product_varient.price', 'product_varient.mrp', 'product_varient.varient_image', 'product_varient.unit', 'product_varient.quantity')
                ->limit(10)
                ->where('store_products.store_id', $nearbystore->store_id)
                ->where('deal_product.deal_price', NULL)
                //   ->OrWhere('deal_product.valid_from', '>', $current)
                //   ->OrWhere('deal_product.valid_to', '<', $current)
                ->orderByRaw('RAND()')
                ->get();

            if (count($new) > 0) {
                $message = array('status' => '1', 'message' => 'New in App', 'data' => $new);
                return $message;
            } else {
                $message = array('status' => '0', 'message' => 'nothing in new', 'data' => []);
                return $message;
            }
        } else {
            $message = array('status' => '2', 'message' => 'No Products Found Nearby', 'data' => []);
            return $message;
        }
    }


    public function recentSelling(Request $request)
    {
        try {
            $recentSelling = Product::with('variants', 'category')
                ->orderByRaw('RAND()')
                ->limit(10)
                ->get();
            if (count($recentSelling) > 0) {
                return ['status' => '1', 'message' => 'recent selling products', 'data' => $recentSelling];
            }
            throw new \Exception('No Recent Sell Items');
        } catch (\Exception $e) {
            return ['status' => '0', 'message' => $e->getMessage(), 'data' => []];
        }
    }


    public function completed_orders(Request $request)
    {
        $user_id = $request->user_id;
        $completeds = DB::table('orders')
            ->leftJoin('delivery_boy', 'orders.dboy_id', '=', 'delivery_boy.dboy_id')
            ->where('orders.user_id', $user_id)
            ->where('orders.order_status', 'Completed')
            ->get();

        if (count($completeds) > 0) {
            foreach ($completeds as $completed) {
                $order = DB::table('store_orders')
                    ->leftJoin('product_varient', 'store_orders.varient_id', '=', 'product_varient.varient_id')
                    ->select('store_orders.*', 'product_varient.description')
                    ->where('store_orders.order_cart_id', $completed->cart_id)
                    ->orderBy('store_orders.order_date', 'DESC')
                    ->get();
                $data[] = array('order_status' => $completed->order_status, 'delivery_date' => $completed->delivery_date, 'time_slot' => $completed->time_slot, 'payment_method' => $completed->payment_method, 'payment_status' => $completed->payment_status, 'paid_by_wallet' => $completed->paid_by_wallet, 'cart_id' => $completed->cart_id, 'price' => $completed->total_price, 'del_charge' => $completed->delivery_charge, 'remaining_amount' => $completed->rem_price, 'coupon_discount' => $completed->coupon_discount, 'dboy_name' => $completed->boy_name, 'dboy_phone' => $completed->boy_phone, 'data' => $order);
            }
        } else {
            $data = array('data' => []);
        }
        return $data;


    }


    public function cancelledOrders(Request $request)
    {
        try {
            $cancelledOrders = Order::where('user_id', $request->user_id)->where('order_status', 'cancelled')->get();

            return ['status' => 1, 'message' => 'Cancelled orders list', 'data' => $cancelledOrders];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function checkout()
    {

    }
}
