<?php

return [
    'forgot_password' => [
        'RESET_LINK' => 'Reset Link of the User',
        'NAME' => 'Name of the User',
        'PASSWORD' => 'Password Text',
        'MAIL_USERNAME' => 'Email Username',
    ],

    'admin_welcome_email' => [
        'RESET_LINK' => 'Reset Link of the User',
        'NAME' => 'Name of the User',
        'PASSWORD' => 'Password Text',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
    ],

    'customer_welcome_email' => [
        'NAME' => 'Name of the User',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
        'EMAIL_VERIFICATION_LINK' => 'Customer Registration Verification Email Link.',
        'EMAIL_UNSUBSCRIBE_LINK' => 'Email unsubscribe link.'
    ],

    "order_confirm_email_to_customer" => [
        'NAME' => 'Name of the User',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
        'ORDERS_LIST_LINK' => 'Order List link',
        'EMAIL_UNSUBSCRIBE_LINK' => 'Email Unsubscribe link.'
    ],

    "order_shipped_email_to_customer" => [
        'NAME' => 'Name of the User',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
        'ORDERS_LIST_LINK' => 'Order List link',
        'ORDER_CANCEL_REASON' => 'Order Cancel reason.',
        'EMAIL_UNSUBSCRIBE_LINK' => 'Email Unsubscribe link.'
    ],

    "order_cancel_email_to_customer" => [
        'NAME' => 'Name of the User',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
        'EMAIL_UNSUBSCRIBE_LINK' => 'Email Unsubscribe link.'
    ],

    "order_delivered_email_to_customer" => [
        'NAME' => 'Name of the User',
        'MAIL_USERNAME' => 'Email Username',
        'APP_URL' => env('APP_URL'),
        'APP_NAME' => env('APP_NAME'),
        'ORDERS_LIST_LINK' => 'Order List link',
        'ORDER_ID' => 'Order Id',
        'ORDER_ADDRESS' => 'Order Address',
        'ARRIVING_DATE' => 'Package arriving Date',
        'EMAIL_UNSUBSCRIBE_LINK' => 'Email Unsubscribe link.'
    ],
];

