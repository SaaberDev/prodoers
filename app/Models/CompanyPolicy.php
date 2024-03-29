<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCompanyPolicy
 */
class CompanyPolicy extends Model
{
    use HasFactory;

    protected $guarded = [];
}
