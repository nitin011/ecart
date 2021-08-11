<?php


namespace App\Repositories\Admin;


use App\Interfaces\Admin\OrderStatusInterface;
use App\Models\OrderStatusHistory;
use App\Models\Status;

Class OrderStatusRepository implements OrderStatusInterface
{
    public function getAll()
    {
        return Status::get();
    }

    public function getWithPluckNameId()
    {
        return Status::get()->pluck('title', 'id');
    }

    public function addStatusHistory(array $data)
    {
        return OrderStatusHistory::create($data);
    }
}
