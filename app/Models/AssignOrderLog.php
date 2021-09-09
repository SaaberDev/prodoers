<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperAssignOrderLog
 */
class AssignOrderLog extends Pivot
{
    use HasFactory;

    protected $table = 'assign_order_logs';

    protected $guarded = [];

    protected $touches = ['users'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
