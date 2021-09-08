<?php

namespace App\Observers\Admin\Order;

use App\Models\AssignOrder;

class AssignOrderObserver
{
    /**
     * Handle the AssignedOrder "created" event.
     *
     * @param  \App\Models\AssignOrder  $assignedOrder
     * @return void
     */
    public function created(AssignOrder $assignedOrder)
    {
        //
    }

    /**
     * Handle the AssignedOrder "updated" event.
     *
     * @param  \App\Models\AssignOrder  $assignedOrder
     * @return void
     */
    public function updated(AssignOrder $assignedOrder)
    {
        //
    }

    /**
     * Handle the AssignedOrder "deleted" event.
     *
     * @param  \App\Models\AssignOrder  $assignedOrder
     * @return void
     */
    public function deleted(AssignOrder $assignedOrder)
    {
        //
    }

    /**
     * Handle the AssignedOrder "restored" event.
     *
     * @param  \App\Models\AssignOrder  $assignedOrder
     * @return void
     */
    public function restored(AssignOrder $assignedOrder)
    {
        //
    }

    /**
     * Handle the AssignedOrder "force deleted" event.
     *
     * @param  \App\Models\AssignOrder  $assignedOrder
     * @return void
     */
    public function forceDeleted(AssignOrder $assignedOrder)
    {
        //
    }
}
