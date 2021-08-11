<?php

namespace App\Http\Controllers\Api;

use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AppController extends Controller
{

    public function appConfigurations(Request $request)
    {
        try {
            $configurations = Configuration::all();
            $paypal = [
                'SANDBOX_ACCOUNT' => env('SANDBOX_ACCOUNT',null),
                'PAYPAL_CLIENT_ID' => env('PAYPAL_CLIENT_ID',null),
                'PAYPAL_SECRET' => env('PAYPAL_SECRET',null),
                'PAYPAL_MODE' => env('PAYPAL_MODE',null),
                'PAYPAL_CURRENCY' => env('PAYPAL_CURRENCY',null)
            ];
            return array('status' => 1, 'message' => 'App Configurations', 'data' => compact('configurations','paypal'));
        } catch (\Exception $e) {
            return array('status' => 0, 'message' => $e->getMessage(), 'data' => []);
        }
    }

    public function delivery_info(Request $request)
    {
        $del_fee = DB::table('freedeliverycart')
            ->first();

        if ($del_fee) {
            $message = array('status' => '1', 'message' => 'Delivery fee and cart value', 'data' => $del_fee);
            return $message;
        } else {
            $message = array('status' => '0', 'message' => 'data not found', 'data' => []);
            return $message;
        }

        return $message;
    }
}
