<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderItemCancelEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $itemIds;
    public $order;

    /**
     * Create a new event instance.
     *
     * @param Order $order
     * @param $itemIds
     */
    public function __construct(Order $order, $itemIds)
    {
        $this->itemIds = $itemIds;
        $this->order = $order;
    }

}
