<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Interfaces\Customer\TransactionInterface;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $transactionRepository;

    public function __construct(TransactionInterface $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    /**
     * 'order_id', 'user_id', 'transaction_id',
     * 'status', 'payer', 'details', 'created_at', 'updated_at',
     *
     */
    public function transactionStore(Request $request)
    {
        $requestData = $request->all();
        $this->transactionRepository->store([
            'order_id' => $requestData['details']['order_id'] ?? null,
            'user_id' => auth()->user()->user_id,
            'transaction_id' => $requestData['details']['id'],
            'status' => $requestData['details']['status'],
            'payer' => $requestData['details']['payer']['payer_id'] ?? null,
            'details' => $requestData['transaction'],
        ]);
        return response()->json(['status' => true, 'message' => 'Transaction Stored.']);
    }
}
