<?php

namespace App\Listeners\Order;

use App\Events\Order\AssignOrderEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToAssignedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param AssignOrderEvent $event
     * @return void
     */
    public function handle(AssignOrderEvent $event)
    {
        dd($event);
    }
}
