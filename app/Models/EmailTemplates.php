<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model
{
    protected $table = 'email_templates';

    protected $fillable = ['title', 'subject', 'content', 'action', 'created_at', 'updated_at'];

    protected $hidden = ['remember_token'];

    public const EMAIL_ACTION = [
        "forgot_password" => "Forgot Password",
        "admin_forgot_password" => "Admin Forgot Password",
        "new_registration" => "New Registration",

        "admin_activation_email" => "Admin activation email",
        "admin_welcome_email" => "Admin welcome email",

        "customer_welcome_email" => "Customer welcome email",

        "order_confirm_email_to_customer" => "Order confirm email to customer",
        "order_shipped_email_to_customer" => "Order shipped email to customer",
        "order_cancel_email_to_customer" => "Order cancel email to customer",
        "order_delivered_email_to_customer" => "Order delivered email to customer",
        "order_item_cancel_email_to_customer" => "Order item cancel email to customer",
    ];
}
