<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperServiceCategoryFaq
 */
class ServiceCategoryFaq extends Model
{
    use HasFactory;

    protected $table = 'service_category_faqs';

    protected $guarded = [];

    public function service_categories()
    {
        return $this->belongsTo(ServiceCategory::class);
    }
}
