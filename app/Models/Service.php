<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperService
 */
class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function service_categories(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
