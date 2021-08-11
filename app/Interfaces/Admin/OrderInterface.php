<?php


namespace App\Interfaces\Admin;

use Illuminate\Http\Request;

interface OrderInterface
{
    public function getAllAjax(Request $request);

    public function getAll($perPage = null);

    public function store(array $requestData);

    public function getById($id);

    public function deleteOrder($id);

    public function getOrderWithTrashed($id);

    public function update(array $data, $order_id);
}
