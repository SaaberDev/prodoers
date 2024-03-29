<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin IdeHelperUser
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;


    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetails()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function assignOrders()
    {
        return $this->hasOne(AssignOrder::class);
//        return $this->belongsToMany(Order::class, 'order_assigned_to_designwalas')->withPivot('status');
    }

    public function socialProviders()
    {
        return $this->hasMany(SocialiteAuth::class);
    }
}
