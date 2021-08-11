<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class ForgotPasswordEmail
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
