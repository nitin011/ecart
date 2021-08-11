<?php

namespace App\EventListeners;

use App\Events\OrderDelivered;
use App\Events\WelcomeCustomerUser;
use App\Models\EmailTemplates;
use App\Services\EmailService;

class OrderDeliveredEmailToCustomerHandler
{
    protected EmailService $email_service;

    public function __construct(EmailService $emailService)
    {
        $this->email_service = $emailService;
    }

    /**
     * 'NAME' => 'Name of the User',
     * 'MAIL_USERNAME' => 'Email Username',
     * 'APP_URL' => env('APP_URL'),
     * 'APP_NAME' => env('APP_NAME'),
     * 'ORDERS_LIST_LINK' => 'Order List link',
     * 'ORDER_ID' => 'Order Id',
     * 'ORDER_ADDRESS' => 'Order Address',
     * 'ARRIVING_DATE' => 'Package arriving Date',
     * 'EMAIL_UNSUBSCRIBE_LINK' => 'Email Unsubscribe link.'
     * @param OrderDelivered $event
     */
    public function handle(OrderDelivered $event)
    {
        $order = $event->order;
        $content_var_values = [
            'NAME' => $order->user->user_name, // 'Name of the User',
            'MAIL_USERNAME' => $order->user->user_email, //'Email Username',
            'APP_URL' => config('app.url'),
            'APP_NAME' => config('app.name'),
            'ORDERS_LIST_LINK' => route('customer.order.index'), //'Customer Registration Verification Email Link.',
            'EMAIL_UNSUBSCRIBE_LINK' => 'Customer Registration Verification Email Link.',
            'ORDER_ID' => $order->order_id,
            'ORDER_ADDRESS' => $order->address->full_address,
            'ARRIVING_DATE' => $order->updated_at,
        ];
        $mail_params_array = ['to' => $order->user->user_email, 'from' => config('mail.username'), 'from_name' => config('mail.from.name')];
        $email_template = 'order_delivered_email_to_customer';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template);
    }
}
