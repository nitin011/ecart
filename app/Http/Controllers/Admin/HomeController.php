<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class HomeController extends Controller
{
    public function dashboard(Request $request)
    {

        $total_earnings = DB::table('orders')
            ->where('order_status', 'Completed')
            ->sum('total_price');

        $completed_orders = DB::table('orders')
            ->where('order_status', 'Completed')
            ->count();

        $app_users = DB::table('users')
            ->count();

        $stores = DB::table('store')
            ->count();

        $pending = DB::table('orders')
            ->where('order_status', 'Pending')
            ->count();

        $cancelled = DB::table('orders')
            ->where('order_status', 'Cancelled')
            ->count();

        $delivery_boys = DB::table('delivery_boy')
            ->count();

        $city = City::query()->count();
        return view('admin.home', compact("total_earnings", "completed_orders", "app_users", "stores", "pending", "cancelled", "delivery_boys", "city"));
    }
}
