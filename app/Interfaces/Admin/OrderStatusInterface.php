<?php


namespace App\Interfaces\Admin;


interface OrderStatusInterface
{
    public function getAll();

    public function getWithPluckNameId();

    public function addStatusHistory(array $data);
}
