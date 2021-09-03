<?php

namespace App\EventListeners;

use App\Events\OrderItemCancelEvent;
use App\Models\OrderItem;
use App\Repositories\Admin\OrderItemRepository;
use App\Services\EmailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OrderItemCancelListener
{
    private $orderItemRepo;
    protected $email_service;

    /**
     * Create the event listener.
     *
     * @param OrderItemRepository $orderItemRepository
     */
    public function __construct(EmailService $emailService,OrderItemRepository $orderItemRepository)
    {
        $this->orderItemRepo= $orderItemRepository;
        $this->email_service = $emailService;
    }

    /**
     * Handle the event.
     *
     * @param OrderItemCancelEvent $event
     * @return void
     */
    public function handle(OrderItemCancelEvent $event)
    {
        $orderItems= OrderItem::whereIn('id', $event->itemIds)->get();
        $html= view('admin.orders.item-list', ['items'=>$orderItems])->render();
        $order= $event->order;
        $content_var_values = [
            'NAME' => $order->user->user_name, // 'Name of the User',
            //'EMAIL' => $order->user->user_email, //'Email Username',
            'APP_URL' => config('app.url'),
            'APP_NAME' => config('app.name'),
            'EMAIL_UNSUBSCRIBE_LINK' => 'Customer Registration Verification Email Link.',
            'ORDER_ID' => $order->order_id,
            'PRODUCT_LIST'=>$html
        ];
        $mail_params_array = ['to' => $order->user->user_email, 'from' => config('mail.username'), 'from_name' => config('mail.from.name')];
        $email_template = 'order_item_cancel_email_to_customer';
        $this->email_service->sendEmail($mail_params_array, $content_var_values, $email_template);
    }
}
