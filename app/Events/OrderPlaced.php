<?php

namespace App\Events;

use App\Models\Order;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class OrderPlaced
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $order;

    /**
     * Create a new event instance.
     *
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function generatePdf(){
        $html= view('admin.orders.partials.invoice', ['order' => $this->order,'pdf'=>true])->render();
        $pdf = PDF::loadHTML($html)->setPaper('a4', 'landscape');
        $fileName= '#'.$this->order->order_id.'-Invoice.pdf';
        return ['output'=> $pdf->output(),'file'=> $fileName];
    }
}
