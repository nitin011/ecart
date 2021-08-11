<?php


namespace App\Repositories\Admin;

use App\Interfaces\Admin\OrderInterface;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderRepository implements OrderInterface
{

    public function getAll($perPage = null)
    {
        if (is_null($perPage)) {
            return Order::orderBy('order_date')->get();
        }
        return Order::orderBy('order_date')->paginate($perPage);
    }

    public function ajaxActions(Request $request)
    {
        switch ($request->action) {
            case 'update_order_status':
                return $this->updateOrderStatus($request->order_status, $request->order_id);
            default:
                throw new \Exception('Unexpected value');
        }
    }

    public function updateOrderStatus($order_status, $order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->order_status = $order_status;
        return $order->save();
    }

    public function getAllAjax(Request $request)
    {
        if (isset($request->action) && ($request->action != null)) {
            $this->ajaxActions($request);
        }
        $data = Order::orderBy('order_date')->get();
        return DataTables::of($data)
            /**
             * customer_name
             * total_amount
             * order_date
             * delivery_date
             * time_slot
             * status
             * action
             */
            ->addColumn('customer_name', function ($data) {
                return ucfirst($data->user->user_name);
            })
            ->addColumn('total_amount', function ($data) {
                return formatPrice($data->price_without_delivery);
            })
            ->editColumn('order_date', function ($data) {
                return formatDate($data->order_date);
            })
            ->editColumn('delivery_date', function ($data) {
                return formatDate($data->delivery_date);
            })
            ->editColumn('status', function ($data) {
                return view('admin.orders.partials.status', compact('data'));
            })
            ->addColumn('action', function ($data) {
                return view('admin.orders.partials.action', compact('data'));
            })
            ->rawColumns(['customer_name', 'total_amount', 'order_date', 'delivery_date', 'status', 'action'])
            ->make(true);
    }

    public function store(array $requestData)
    {
        $delivery_date = is_null($requestData['delivery_date']) ? Carbon::now()->addDays(2)->toDateString() : $requestData['delivery_date'];
        $cartItems = \Cart::getContent();
        $requestData['store_id'] = 0;
        $requestData['cart_id'] = 0;
        $requestData['price_without_delivery'] = \Cart::getTotal();
        $requestData['total_price'] = \Cart::getTotal();
        $requestData['sub_total'] = \Cart::getSubTotal();
        $requestData['total_products_mrp'] = $this->getTotalProductsMRP($cartItems);
        $requestData['payment_method'] = 'online';
        $requestData['time_slot'] = 'Anytime';
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

    public function getById($id)
    {
        return Order::findOrFail($id);
    }

    public function deleteOrder($id)
    {
        try {
            DB::beginTransaction();
            $order = Order::with('orderItems')->where('order_id', $id)->firstOrFail();
            foreach ($order->orderItems as $item) {
                $item->delete();
            }
            $order->delete();
            DB::commit();
            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getOrderWithTrashed($id)
    {
        return Order::with(['user' => function ($q) {
            $q->with(['addresses' => function ($q) {
                $q->withTrashed();
            }]);
        }, 'address' => function ($q) {
            $q->withTrashed();
        }, 'orderItems' => function ($q) {
            $q->withTrashed();
        }])->findOrFail($id);
    }

    public function update(array $data, $order_id)
    {
        $order = Order::findOrFail($order_id);
        return $order->update($data);
    }
}


