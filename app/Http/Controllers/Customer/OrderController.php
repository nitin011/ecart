<?php

namespace App\Http\Controllers\Customer;

use App\Http\Requests\Customer\StoreOrderRequest;
use App\Interfaces\ConfigurationInterface;
use App\Interfaces\Customer\CartInterface;
use App\Interfaces\Customer\OrderInterface;
use App\Interfaces\Customer\OrderItemInterface;
use App\Interfaces\Customer\ProductVariantInterface;
use App\Interfaces\Customer\TransactionInterface;
use App\Models\TimeSlot;
use App\Services\CityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use function Doctrine\Common\Cache\Psr6\get;

class OrderController extends Controller
{
    protected $configurationRepository, $cartRepository, $cityService, $orderRepository, $orderItemRepository, $transactionRepository, $productVariantRepository;

    public function __construct(CityService $cityService, ConfigurationInterface $configurationRepository, TransactionInterface $transactionRepository, OrderItemInterface $orderItemRepository, CartInterface $cartRepository, OrderInterface $orderRepository, ProductVariantInterface $productVariantRepository)
    {
        $this->cityService = $cityService;
        $this->configurationRepository = $configurationRepository;
        $this->transactionRepository = $transactionRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->cartRepository = $cartRepository;
        $this->orderRepository = $orderRepository;
        $this->productVariantRepository = $productVariantRepository;
    }

    public function index()
    {
        $orders = $this->orderRepository->getAll(10);
        return view('customer.pages.orders.index', compact('orders'));
    }

    public function checkout()
    {
        try {
            if (\Cart::getContent()->isEmpty()) {
                throw new \Exception('No Items for Checkout.');
            }
            $this->cartRepository->clearAllConditions();
            $vat = null; //$this->cartRepository->tax();
            $delivery_charge = $this->cartRepository->deliveryCharge();
            updateCartTotal($delivery_charge);
            $coupon = (Session::exists('coupon')) ? Session::get('coupon')[0] : null;
            $cart = \Cart::getContent();
            $time_slot = null; //TimeSlot::findOrFail(1);
            if ($cart->count() <= 0) {
                throw new \Exception('No Items for Checkout.');
            }
            $cities = $this->cityService->getActive();

            return view('web.pages.checkout.checkout', compact('coupon', 'cities', 'vat', 'cart', 'delivery_charge', 'time_slot'));
        } catch (\Exception $e) {
            return redirect()->route('customer.index')->with('error', $e->getMessage());
        }
    }

    public  function checkoutAjax(Request $request){

        try {
            if ($request->type == 'delete'){
                \Cart::remove($request->id);
                $msg= "Item removed successfully!";
            }

            if ($request->type == 'add' || $request->type == 'less'){
                $variant = $this->productVariantRepository->getByIdWithProduct($request->id);
                $cartItem= \Cart::get($request->id);
                \Cart::update($request->id, [
                    'name' => $variant->product->product_name,
                    'price' => $variant->price,
                    'quantity' => $request->qty - $cartItem->quantity,
                    'attributes' => array(),
                    'associatedModel' => $variant
                ]);

                $msg= "Cart updated successfully";
            }

            $html= view('web.pages.checkout.checkout_product')->render();

            return response()->json(['status'=>true,'message'=>$msg, 'html'=>$html]);
        }catch(\Exception $exception){
            return response()->json(['status'=>false,'message'=>'Something went wrong', 'html'=>null]);
        }

    }

    public function confirmCheckout(StoreOrderRequest $request)
    {
        $requestData = $request->all();
        $requestData['delivery_charge'] = $this->configurationRepository->getDeliveryCharge()['value'];
        $order = $this->orderRepository->store($requestData);
        $this->orderItemRepository->storeCartItems(\Cart::getContent(), $order->order_id);
        $this->transactionRepository->updateByTransactionId(['order_id' => $order->order_id], $requestData['transaction_id']);
        \Cart::clear();
        $this->cartRepository->removeCoupon();
        $this->cartRepository->clearAllConditions();
        return redirect()->route('customer.order.index')->with('success', 'Order Placed successfully');
    }
}
