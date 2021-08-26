<?php

namespace App\Services;

use App\Models\EmailTemplates;
use Illuminate\Mail\Mailer;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    protected $mailer;

    protected $activationRepo;

    protected $resendAfter = 24;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param $mail_params_array
     * @param null $template
     * @param $dynamic_data
     * @return array|string|null
     */
    public function sendEmail($mail_params_array, $dynamic_data, $template = null)
    {
        $to = $mail_params_array['to'];
        $result = null;
        if (is_array($to)) {
            foreach ($mail_params_array['to'] as $user_email) {
                //$result = $this->sendEmailToUser($user_email, $mail_params_array, $dynamic_data, $template);
            }
        } else {
            //$result = $this->sendEmailToUser($to, $mail_params_array, $dynamic_data, $template);
        }
        return $result;
    }

    public function sendEmailToUser($to, $mail_params_array, $dynamic_data, $template = null)
    {
        try {
            $from = config('mail.from.address');
            $from_name = config('app.name');
            $template_variables = config('emailVariables.' . $template);
            $replace_array = $key_array = [];
            if (!empty($template_variables)) {
                foreach ($template_variables as $key => $template_variable) {
                    $key_array[] = "#" . $key . "#";
                    $replace_array[] = (isset($dynamic_data[trim($key, '#')])) ? $dynamic_data[trim($key, '#')] : '';
                }
            }
            // Email Template content get and replace variable with user value
            $email_data = EmailTemplates::query()->where('action', $template)->first();
            $subject = isset($mail_params_array['subject']) ? $mail_params_array['subject'] : $email_data->subject;
            $subject = str_replace($key_array, $replace_array, $subject);
            $content = str_replace($key_array, $replace_array, $email_data->content);
            $content_data = ['email_content' => $content];
            try {
                Mail::send('emails.sample', $content_data, function ($message) use ($to, $from, $from_name, $subject) {
                    $message->from($from, $from_name)
                        ->to($to)
                        ->subject($subject);

                    if (isset($headers) && !empty($headers)) {
                        $headers = $message->getHeaders();
                        foreach ($headers as $key => $val) {
                            $headers->addTextHeader($key, $val);
                        }
                    }
                    $headers = $message->getHeaders();
                    $headers->addTextHeader('X-MC-PreserveRecipients', 'false');
                    $headers->addTextHeader('X-No-Track', \Illuminate\Support\Str::random(10));
                });
            } catch (\Exception $e) {
                \Log::info("Email not sent from the Emails. Returned with error: " . $e->getMessage());
                return $e->getMessage();
            }
            return Mail::failures();
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            throw new $e;
        }
    }

}
