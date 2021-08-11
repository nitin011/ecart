<?php


namespace App\Repositories\Customer;


use App\Models\Transaction;

class TransactionRepository implements \App\Interfaces\Customer\TransactionInterface
{

    public function updateTransaction(array $data, $id)
    {
        return Transaction::where('id', $id)->update($data);
    }

    public function updateByTransactionId(array $data, $transaction_id)
    {
        return Transaction::where('transaction_id', $transaction_id)->update($data);
    }

    public function getById($id)
    {
        return Transaction::findOrFail($id);
    }

    public function getByTransactionId($transaction_id)
    {
        return Transaction::where('transaction_id', $transaction_id)->firstOrFail();
    }

    public function getAllByCustomerId($customer_id)
    {
        return Transaction::where('user_id', $customer_id)->get();
    }

    public function store(array $transaction)
    {
        return Transaction::create($transaction);
    }
}
