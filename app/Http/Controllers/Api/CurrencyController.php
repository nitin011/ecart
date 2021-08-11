<?php

namespace App\Http\Controllers\Api;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function currency(Request $request)
    {
        try {
            $currency = Currency::firstOrCreate(['currency_sign' => '£'], ['currency_name' => 'Pound']);
            return array('status' => '1', 'message' => 'currency', 'data' => $currency);
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }
}
