<?php


namespace App\Interfaces\Admin;


interface OrderItemInterface
{
    public function getAll($perPage = null);

    public function getById($id);

    public function getByOrderId($order_id);

    public function store($item, $order_id);

    public function storeCartItems($items, $order_id);
}
