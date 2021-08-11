<?php

namespace App\Observers;

use App\EventListeners\WelcomeCustomerUserHandler;
use App\Events\WelcomeCustomerUser;
use App\User;

class CustomerObserver
{
    /**
     * Handle the task "created" event.
     * @param User $user
     * @return void
     */
    public function created(User $user)
    {
        event(new WelcomeCustomerUser($user));
    }

    /**
     * Handle the task "updated" event.
     *
     * @param User $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the task "deleted" event.
     *
     * @param User $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the task "restored" event.
     *
     * @param User $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the task "force deleted" event.
     *
     * @param User $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
