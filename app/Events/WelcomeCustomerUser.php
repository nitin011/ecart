<?php

namespace App\Events;

use App\User;
use Illuminate\Queue\SerializesModels;

class WelcomeCustomerUser
{
    use SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
