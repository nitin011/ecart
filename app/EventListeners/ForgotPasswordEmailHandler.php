<?php

namespace App\EventListeners;

use App\Events\ForgotPasswordEmail;
use App\Services\EmailService;

class ForgotPasswordEmailHandler
{
    protected $email_service;

    public function __construct(EmailService $emailService)
    {
        $this->email_service = $emailService;
    }

    public function handle(ForgotPasswordEmail $event)
    {
        $user = $event->data;
        $link = $user['reset_link'];
        $content_var_values = ['NAME' => $user['name'], 'RESET_LINK' => $link];
        $mail_params_array = ['to' => $user['email'], 'from' => config('mail.username'), 'from_name' => config('mail.from.name')];
        $email_template = 'forgot_password';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template);
    }
}
