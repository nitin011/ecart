<?php

namespace App\Observers;

use App\Events\OrderCancelled;
use App\Events\OrderDelivered;
use App\Events\OrderPlaced;
use App\Events\OrderShipped;
use App\Models\Order;

class OrderObserver
{
    /**
     * Handle the task "created" event.
     * @param Order $order
     * @return void
     */
    public function created(Order $order)
    {
        event(new OrderPlaced($order));
    }

    /**
     * Handle the task "updated" event.
     * @param Order $order
     * @return void
     */
    public function updated(Order $order)
    {
        switch ($order->order_status) {
            case  'confirmed':
                event(new OrderPlaced($order));
                break;
            case  'shipped':
                event(new OrderShipped($order));
                break;
            case 'rejected':
            case 'canceled':
                event(new OrderCancelled($order));
                break;
            case 'completed':
                event(new OrderDelivered($order));
        }
    }

    /**
     * Handle the task "deleted" event.
     *
     * @param Order $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the task "restored" event.
     *
     * @param Order $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the task "force deleted" event.
     *
     * @param Order $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
