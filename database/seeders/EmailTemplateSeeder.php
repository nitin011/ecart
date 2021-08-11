<?php

namespace Database\Seeders;

use App\Models\EmailTemplates;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeder extends Seeder
{
    public function run()
    {
        EmailTemplates::query()->truncate();
        $emailTemplatesTable = DB::table('email_templates');

        $emailTemplatesTable->insert([
            'title' => 'Forgot Password',
            'subject' => 'Reset Password',
            'content' => view('emails.default_templates.forgot_password'),
            'action' => 'forgot_password',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $emailTemplatesTable->insert([
            'title' => 'Welcome to ' . env('APP_NAME'),
            'subject' => 'Admin Welcome',
            'content' => view('emails.default_templates.welcome_customer'),
            'action' => 'customer_welcome_email',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $emailTemplatesTable->insert([
            'title' => 'Welcome to ' . config('app.name'),
            'subject' => 'Welcome to ' . config('app.name'),
            'content' => view('emails.default_templates.welcome_customer'),
            'action' => 'customer_welcome_email',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $emailTemplatesTable->insert([
            'title' => "Order Confirmed",
            'subject' => 'Order Confirmed',
            'content' => view('emails.default_templates.order_confirm_email_to_customer'),
            'action' => 'order_confirm_email_to_customer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $emailTemplatesTable->insert([
            'title' => "Order Package Shipped.",
            'subject' => "Order Package Shipped.",
            'content' => view('emails.default_templates.order_shipped_email_to_customer'),
            'action' => 'order_shipped_email_to_customer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $emailTemplatesTable->insert([
            'title' => "Order Cancelled.",
            'subject' => 'Order Cancelled.',
            'content' => view('emails.default_templates.order_cancel_email_to_customer'),
            'action' => 'order_cancel_email_to_customer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        $emailTemplatesTable->insert([
            'title' => "Order Package Delivered",
            'subject' => 'Order Package Delivered',
            'content' => view('emails.default_templates.order_delivered_email_to_customer'),
            'action' => 'order_delivered_email_to_customer',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
