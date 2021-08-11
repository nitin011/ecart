<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\Admin\OrderInterface;
use App\Interfaces\Admin\OrderItemInterface;
use App\Interfaces\Admin\OrderStatusInterface;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class OrderController extends Controller
{
    protected $orderItemRepository, $orderRepository, $orderStatusRepository;

    public function __construct(OrderItemInterface $orderItemRepository, OrderStatusInterface $orderStatusRepository, OrderInterface $orderRepository)
    {
        $this->orderItemRepository = $orderItemRepository;
        $this->orderStatusRepository = $orderStatusRepository;
        $this->orderRepository = $orderRepository;
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
        $pdf = PDF::loadView('admin.orders.partials.invoice', ['order' => $order]);
        return $pdf->download('invoice.pdf');
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
}
