<?php

namespace App\Http\Controllers\Admin;

use App\Events\OrderItemCancelEvent;
use App\Events\OrderPlaced;
use App\Http\Controllers\Controller;
use App\Interfaces\Admin\OrderInterface;
use App\Interfaces\Admin\OrderItemInterface;
use App\Interfaces\Admin\OrderStatusInterface;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Repositories\ConfigurationRepository;
use App\Repositories\Customer\CartRepository;
use App\Repositories\Customer\CustomerRepository;
use App\User;
use Darryldecode\Cart\Exceptions\InvalidConditionException;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class OrderController extends Controller
{
    protected $orderItemRepository, $orderRepository, $orderStatusRepository;
    private $configurationRepository;

    public function __construct(OrderItemInterface $orderItemRepository, OrderStatusInterface $orderStatusRepository, OrderInterface $orderRepository, ConfigurationRepository $configurationRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->orderRepository = $orderRepository;
        $this->configurationRepository = $configurationRepository;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->orderRepository->getAllAjax($request);
        }
        return view('admin.orders.index');
    }


    public function show($id)
    {
        $statuses = $this->orderStatusRepository->getWithPluckNameId();
        $last_status_history = \App\Models\OrderStatusHistory::with('status')->where('order_id', $id)->orderBy('status_id', 'desc')->first();
        $order = $this->orderRepository->getById($id);
        $address = Address::query()->where('id', $order->address_id)->withTrashed()->first();
        return view('admin.orders.show', compact('order', 'address', 'statuses', 'last_status_history'));
    }

    public function edit($id)
    {
        $order = $this->orderRepository->getOrderWithTrashed($id);
        $address = Address::withTrashed()->findOrFail($order->address_id);
        $user_address = isset($order->user->addresses) ? $order->user->addresses : [];
        return view('admin.orders.edit', compact('order', 'address', 'user_address'));
    }

    public function updateStatus(Request $request, $id)
    {
        $this->orderRepository->update([
            'order_status' => $request->order_status,
        ], $id);
        return response()->json(['status' => true]);
    }

    public function update(UpdateOrderRequest $request, $id)
    {
        $this->orderRepository->update($request->all(), $id);
        return redirect()->back()->with('success', 'Order Updated Successfully!');
    }

    public function destroy($id)
    {
        $this->orderRepository->deleteOrder($id);
        return redirect()->back()->with('success', 'Order Deleted Successfully!');
    }

    public function printInvoice($id)
    {
        $order = $this->orderRepository->getById($id);
        return view('admin.orders.partials.invoice', compact('order'));
        /*$pdf = PDF::loadView('admin.orders.partials.invoice', compact('order'));
        return $pdf->stream("invoice.pdf", array("Attachment" => false));*/
    }

    public function downloadInvoice($id)
    {
        $order = $this->orderRepository->getById($id);
        $html= view('admin.orders.partials.invoice', ['order' => $order,'pdf'=>true])->render();
        $pdf = PDF::loadHTML($html)->setPaper('a4', 'landscape');
        $fileName= '#'.$order->order_id.'-Invoice.pdf';
        return $pdf->download($fileName);
        //   return redirect()->route('admin.order.index')->with('success', 'Order Deleted Successfully!');
    }

    public function todayOrders(Request $request)
    {
        if ($request->ajax()) {
            return $this->orderRepository->todaysOrdersTable();
        }
    }

    public function addressUpdate(Request $request)
    {
        $this->orderRepository->updateAddress($request);
        return redirect()->route('admin.order.index')->with('success', 'Order Detail Updated Successfully!');
    }

    public function checkout()
    {
        return view('admin.pages.order.checkout');
    }

    public function storeAddress(Request $request)
    {
        try {
            $requestData = $request->all();
            $this->addressRepository->create($requestData);
            return redirect()->back()->with('success', 'Address Added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function removeItem(Request $request)
    {
        $this->orderItemRepository->deleteItem($request->all());
        $order = Order::with('orderItems')->findOrFail($request->order_id);
        if ($order->orderItems->isEmpty()) {
            $order->delete();
            return redirect()->route('admin.order.index')->with('success', 'Order Removed.');
        }
        return redirect()->back()->with('success', 'Item Removed Successfully!');
    }

    public function assignDeliveryBoy(Request $request)
    {
        $res = $this->orderRepository->assignDeliveryBoy($request);
        if ($request->ajax()) {
            return response()->json($res);
        }
        return redirect()->route('admin.delivery_boy.index')->with('success', "Delivery Boy's Detail Updated Successfully!");
    }

    public function resendInvoice($id){
        $order = $this->orderRepository->getById($id);
        event(new OrderPlaced($order));
        return redirect()->back()->with('success','Invoice sent successfully.');
    }

    public function changeItemStatus(Request $request){
        $cancel=[];

        $order= $this->orderRepository->getById($request->order_id);
        foreach ($request->item as $key => $item){
            if ($item['status'] == -1){
                $cancel[]= $key;
            }
            $orderItem = $this->orderItemRepository->getById($key);
            $orderItem->status = $item['status'];
            $orderItem->delivery_date = Carbon::parse($item['delivery_date']);
            $orderItem->save();
        }
        if (count($cancel))
            event(new OrderItemCancelEvent($order, $cancel));

        return redirect()->back()->with('success','Order items status changed successfully.');
    }

    public function getCreate(){
        $products= Product::has('variants')->with('variants')->get();
        return view('admin.orders.create', compact('products'));
    }

    public function getProduct(Request $request){
        $products = ProductVariant::whereIn('varient_id', $request->products)->get();
        $html = view('admin.orders.partials.product_table',compact('products'))->render();
        return response()->json(['html'=>$html]);
    }

    public function getOrderDetails(Request $request){
        $user = User::find($request->user);
        $products= ProductVariant::whereIn('varient_id', $request->products)->get();
        $qty= $request->qty;
        $delivery_charge = $this->configurationRepository->getDeliveryCharge();
        $html = view('admin.orders.partials.order_details',compact('user','products', 'qty','delivery_charge'))->render();
        return response()->json(['html'=>$html]);
    }

    public function getUserAddress(Request $request){
        $user = User::find($request->id);
        $html = view('admin.orders.partials.order_user_address',compact('user'))->render();
        return response()->json(['html'=>$html]);
    }

    public function postCreate(Request $request){
        $user= User::find($request->user);
        $products= ProductVariant::whereIn('varient_id', $request->products)->get();
        $qty= $request->qty;
        $requestData['store_id']=0;
        $requestData['cart_id']=0;
        $requestData['user_id']=$user->user_id;
        $requestData['address_id']=$request->address;
        $requestData['price_without_delivery']=$request->subTotal;
        $requestData['sub_total']=$request->subTotal;
        $requestData['delivery_charge'] = $this->configurationRepository->getDeliveryCharge()['value'];
        $requestData['total_price']=$request->total;
        $requestData['coupon_discount']=0.0;
        $requestData['coupon_id']=0;
        $requestData['total_products_mrp']=$request->mrp;
        $requestData['payment_method']='offline + admin';
        $requestData['time_slot']='Anytime';
        $requestData['delivery_date']= \Carbon\Carbon::now()->addDays(2)->toDateString();
        $requestData['order_date'] = \Carbon\Carbon::now()->toDateString();
        $requestData['transaction_info'] = null;

        $order= Order::create($requestData);

        foreach ($products as $product){
            $extra=[
                'id'=>$product->varient_id,
                'name'=>$product->product->product_name,
                'price'=>$product->product->price,
                'quantity'=>$qty[$product->varient_id],
                'attributes'=>[],
                'conditions'=>[],
                'associatedModel'=>$product->toArray(),
            ];
            OrderItem::create([
                'order_id' => $order->order_id,
                'product_variant_id' => $product->varient_id,
                'quantity_value' => ($qty[$product->varient_id] * $product->quantity),
                'quantity_unit' => $product->unit,
                'mrp' => $product->mrp,
                'price' => $product->price,
                'short_description' => $product->short_description,
                'description' => $product->description,
                'variant_image' => $product->varient_image,
                'extra_data' => json_encode($extra)
            ]);
        }

        return redirect()->route('admin.order.index')->with('success','Manually order is created.');
    }
}
