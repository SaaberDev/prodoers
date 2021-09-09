<?php

namespace App\Observers\Admin\Order;

use App\Events\Order\AssignOrderEvent;
use App\Models\AssignOrder;
use Illuminate\Support\Facades\Event;

class AssignOrderObserver
{
    /**
     * Handle the AssignOrder "created" event.
     *
     * @param  \App\Models\AssignOrder  $assignOrder
     * @return void
     */
    public function created(AssignOrder $assignOrder)
    {
        // Update assigned order log
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ]);
        // Fire event
    }

    /**
     * Handle the AssignOrder "updated" event.
     *
     * @param  \App\Models\AssignOrder  $assignOrder
     * @return void
     */
    public function updated(AssignOrder $assignOrder)
    {
        // Update assigned order log
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ]);
    }

    /**
     * Handle the AssignOrder "deleted" event.
     *
     * @param  \App\Models\AssignOrder  $assignOrder
     * @return void
     */
    public function deleted(AssignOrder $assignOrder)
    {
        //
    }

    /**
     * Handle the AssignOrder "restored" event.
     *
     * @param  \App\Models\AssignOrder  $assignOrder
     * @return void
     */
    public function restored(AssignOrder $assignOrder)
    {
        //
    }

    /**
     * Handle the AssignOrder "force deleted" event.
     *
     * @param  \App\Models\AssignOrder  $assignOrder
     * @return void
     */
    public function forceDeleted(AssignOrder $assignOrder)
    {
        //
    }
}
