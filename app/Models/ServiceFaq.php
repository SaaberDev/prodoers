<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperServiceFaq
 */
class ServiceFaq extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsTo(Service::class);
    }
}
