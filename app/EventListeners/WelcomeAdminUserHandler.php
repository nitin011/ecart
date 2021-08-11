<?php

namespace App\EventListeners;

use App\Events\WelcomeAdminUser;
use App\Models\EmailTemplates;
use App\Services\EmailService;

class WelcomeAdminUserHandler
{
    protected EmailService $email_service;

    public function __construct(EmailService $emailService)
    {
        $this->email_service = $emailService;
    }

    public function handle(WelcomeAdminUser $event)
    {
        $user = $event->data;
        $content_var_values = ['NAME' => $user['name'], 'RESET_LINK' => $user['reset_link'], 'PASSWORD' => $user['password']];
        $mail_params_array = ['to' => $user['email'], 'from' => config("mail.username"), 'from_name' => config("mail.from.name")];
        $email_template = 'admin_welcome_email';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template);
    }
}
