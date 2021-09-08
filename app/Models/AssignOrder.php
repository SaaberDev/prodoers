<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperAssignOrder
 */
class AssignOrder extends Model
{
    use HasFactory;

    const PENDING = 'pending';
    const ASSIGNED = 'assigned';
    const CANCELLED = 'cancelled';
    const DONE = 'done';

    protected $guarded = [];

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignOrderLogs()
    {
        return $this->hasMany(User::class);
    }
}
