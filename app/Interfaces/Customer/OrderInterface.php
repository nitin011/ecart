<?php


namespace App\Interfaces\Customer;


interface OrderInterface
{
    public function getAll($perPage = null);

    public function store(array $requestData);
}
