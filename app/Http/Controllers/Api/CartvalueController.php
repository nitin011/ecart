<?php

namespace App\Http\Controllers\Api;

use App\Models\Configuration;
use Composer\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class CartvalueController extends Controller
{
    public function minmax(Request $request)
    {
        try {
            $minmax = [
                'min_value' => Configuration::query()->where('key', 'min_order_amt_value')->first() ?? 0.0,
                'max_value' => Configuration::query()->where('key', 'max_order_amt_value')->first() ?? 0.0,
            ];
            if ($minmax)
                return array('status' => '1', 'message' => 'Min/Max Cart Value', 'data' => $minmax);
            throw new \Exception('Min/Max Cart Value not found');
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }
}
