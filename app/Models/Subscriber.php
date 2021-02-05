<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperSubscriber
 */
class Subscriber extends Model
{
    use HasFactory;

    protected $guarded = [];

    const SUBSCRIBER = 1;
    const NOT_SUBSCRIBER = 0;

    public function isSubscriber()
    {
        return $this->where('subscriber_status', '=', self::SUBSCRIBER);
    }

    public function scopeFilterBy($query, $column, $arg)
    {
        return $query->where(function ($query) use ($arg, $column) {
            $arg == '' ? $query->orderBy('id', 'desc') : $query->orWhere($column, '=', $arg);
        });
    }

    public function scopeSearchBy($query, $column, $search)
    {
        return $query->where(function ($query) use ($search, $column) {
            $query->where($column, 'like', '%' . $search . '%');
        });
    }
}
