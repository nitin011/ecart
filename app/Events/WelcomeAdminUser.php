<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class WelcomeAdminUser
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
