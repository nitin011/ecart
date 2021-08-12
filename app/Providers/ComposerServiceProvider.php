<?php

namespace App\Providers;

use App\Http\ViewComposers\Admin\AdminViewComposer;
use App\Http\ViewComposers\Customer\NavbarViewComposer;
use App\Http\ViewComposers\GlobalViewComposer;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        view()->composer(['*'], GlobalViewComposer::class);
        view()->composer(['customer.*'], NavbarViewComposer::class);
        view()->composer(['web.*'], NavbarViewComposer::class);
        view()->composer(['admin.*'], AdminViewComposer::class);
    }
}
