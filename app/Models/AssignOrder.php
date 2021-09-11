<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperAssignOrder
 */
class AssignOrder extends Model
{
    use HasFactory;

    protected $table = 'assign_orders';

    const PENDING = 'pending';
    const ASSIGNED = 'assigned';
    const CANCELLED = 'cancelled';
    const DONE = 'done';

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * @return BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return BelongsToMany
     */
    public function assignOrderLogs()
    {
        return $this->belongsToMany(
            Order::class,
            'assign_order_logs',
            'order_id', 'user_id', 'order_id'
        )
            ->using(AssignOrderLog::class)
            ->withPivot('status')
            ->withTimestamps()
            ;
    }
}
