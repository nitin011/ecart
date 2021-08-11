<?php


namespace App\Repositories\Customer;


use App\Interfaces\Customer\OrderItemInterface;
use App\Models\OrderItem;

class OrderItemRepository implements OrderItemInterface
{
    public function getAll($perPage = null)
    {
        if (is_null($perPage))
            return OrderItem::latest()->get();

        return OrderItem::latest()->paginate($perPage);
    }

    public function getById($id)
    {
        return OrderItem::findOrFail($id);
    }

    public function getByOrderId($order_id)
    {
        return OrderItem::where('order_id', $order_id)->get();
    }

    public function store($item, $order_id)
    {
        return OrderItem::create([
            'order_id' => $order_id,
            'product_variant_id' => $item->id,
            'quantity_value' => ($item->quantity * $item->associatedModel->quantity),
            'quantity_unit' => $item->associatedModel->unit,
            'mrp' => $item->associatedModel->mrp,
            'price' => $item->associatedModel->price,
            'short_description' => $item->associatedModel->short_description,
            'description' => $item->associatedModel->description,
            'variant_image' => $item->associatedModel->varient_image,
            'extra_data' => json_encode($item->toArray())
        ]);
    }

    public function storeCartItems($items, $order_id)
    {
        foreach ($items as $item) {
            $this->store($item, $order_id);
        }
    }
}
