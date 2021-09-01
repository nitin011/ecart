<?php

namespace App\EventListeners;

use App\Events\OrderPlaced;
use App\Events\WelcomeCustomerUser;
use App\Models\EmailTemplates;
use App\Services\EmailService;

class OrderConfirmEmailToCustomerHandler
{
    protected $email_service;

    public function __construct(EmailService $emailService)
    {
        $this->email_service = $emailService;
    }

    public function handle(OrderPlaced $event)
    {
        $order = $event->order;
        $file= $event->generatePdf();
        $content_var_values = [
            'NAME' => $order->user->user_name, // 'Name of the User',
            'MAIL_USERNAME' => $order->user->user_email, //'Email Username',
            'APP_URL' => config('app.url'),
            'APP_NAME' => config('app.name'),
            'ORDERS_LIST_LINK' => route('customer.order.index'), //'Customer Registration Verification Email Link.',
            'EMAIL_UNSUBSCRIBE_LINK' => 'Customer Registration Verification Email Link.'
        ];
        $mail_params_array = [
            'to' => $order->user->user_email,
            'from' => config('mail.username'),
            'from_name' => config('mail.from.name'),
            ];
        $email_template = 'order_confirm_email_to_customer';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template, $file);
    }
}
