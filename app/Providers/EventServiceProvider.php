<?php

namespace App\Providers;

use App\EventListeners\OrderCancelEmailToCustomerHandler;
use App\EventListeners\OrderConfirmEmailToCustomerHandler;
use App\EventListeners\OrderDeliveredEmailToCustomerHandler;
use App\EventListeners\OrderShippedEmailToCustomerHandler;
use App\EventListeners\WelcomeAdminUserHandler;
use App\EventListeners\WelcomeCustomerUserHandler;
use App\Events\OrderCancelled;
use App\Events\OrderDelivered;
use App\Events\OrderPlaced;
use App\Events\OrderShipped;
use App\Events\WelcomeAdminUser;
use App\Events\WelcomeCustomerUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        WelcomeCustomerUser::class => [
            WelcomeCustomerUserHandler::class,
        ],
        /*'App\Events\ForgotPasswordEmail' => [
            'App\EventListeners\ForgotPasswordEmailHandler',
        ],*/
        WelcomeAdminUser::class => [
            WelcomeAdminUserHandler::class,
        ],

        OrderPlaced::class => [
            OrderConfirmEmailToCustomerHandler::class,
        ],

        OrderShipped::class => [
            OrderShippedEmailToCustomerHandler::class,
        ],

        OrderCancelled::class => [
            OrderCancelEmailToCustomerHandler::class,
        ],

        OrderDelivered::class => [
            OrderDeliveredEmailToCustomerHandler::class,
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
