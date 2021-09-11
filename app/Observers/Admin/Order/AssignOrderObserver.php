<?php

namespace App\Observers\Admin\Order;

use App\Events\Order\AssignOrderEvent;
use App\Models\AssignOrder;

class AssignOrderObserver
{
    /**
     * Handle the AssignOrder "created" event.
     *
     * @param AssignOrder $assignOrder
     * @return void
     */
    public function created(AssignOrder $assignOrder)
    {
        // Create assigned doers log if it doesn't exist
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ], true);

        // Fire event
        event(new AssignOrderEvent($assignOrder->users));
    }

    /**
     * Handle the AssignOrder "updated" event.
     *
     * @param AssignOrder $assignOrder
     * @return void
     */
    public function updated(AssignOrder $assignOrder)
    {
        // Update assigned doers log
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ], true);

        // Fire event
        event(new AssignOrderEvent($assignOrder->users));
    }
}
