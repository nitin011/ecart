<?php


namespace App\Interfaces\Customer;


interface TransactionInterface
{
    public function updateTransaction(array $data, $id);

    public function updateByTransactionId(array $data, $transaction_id);

    public function getById($id);

    public function getByTransactionId($transaction_id);

    public function getAllByCustomerId($customer_id);

    public function store(array $transaction);
}
