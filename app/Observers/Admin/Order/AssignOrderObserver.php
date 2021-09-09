<?php

namespace App\Observers\Admin\Order;

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
        // Update assigned order log
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ], true);
        // Fire event
    }

    /**
     * Handle the AssignOrder "updated" event.
     *
     * @param AssignOrder $assignOrder
     * @return void
     */
    public function updated(AssignOrder $assignOrder)
    {
        // Update assigned order log
        $assignOrder->assignOrderLogs()->attach($assignOrder->user_id, [
            'status' => $assignOrder->status,
        ], true);
        // Fire event

//        $assignOrder->assignOrderLogs()->sync(
//            [
//                'user_id' => $assignOrder->user_id,
//                'status' => $assignOrder->status,
//            ]
//        );
    }
}
