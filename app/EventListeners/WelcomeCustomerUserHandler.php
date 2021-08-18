<?php

namespace App\EventListeners;

use App\Events\WelcomeCustomerUser;
use App\Models\EmailTemplates;
use App\Services\EmailService;
use Illuminate\Support\Facades\DB;

class WelcomeCustomerUserHandler
{
    protected $email_service;

    public function __construct(EmailService $emailService)
    {
        $this->email_service = $emailService;
    }

    /**
     * @param WelcomeCustomerUser $event
     */

    public function handle(WelcomeCustomerUser $event)
    {
        $user = $event->user;
        $content_var_values = [
            'NAME' => $user->first_name . ' ' . $user->last_name, // 'Name of the User',
            'MAIL_USERNAME' => $user->user_email, //'Email Username',
            'APP_URL' => config('app.url'),
            'APP_NAME' => config('app.name'),
            'EMAIL_VERIFICATION_LINK' => route('customer.registration.confirm-email', $user->remember_token),//'Customer Registration Verification Email Link.',
            'EMAIL_UNSUBSCRIBE_LINK' => 'Customer Registration Verification Email Link.'
        ];
        $mail_params_array = ['to' => $user->user_email, 'from' => config('mail.username'), 'from_name' => config('mail.from.name')];
        $email_template = 'customer_welcome_email';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template);
    }
}
