<?php

namespace App\Providers;

use App\Models\Order;
use App\Observers\CustomerObserver;
use App\Observers\OrderObserver;
use App\User;
use Illuminate\Support\ServiceProvider;

class ObserverProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(CustomerObserver::class);
        Order::observe(OrderObserver::class);
    }
}
