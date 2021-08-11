<?php

namespace App;

use App\Models\Address;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'user_phone',
        'user_email',
        'device_id',
        'user_image',
        'user_password',
        'otp_value',
        'status',
        'wallet',
        'rewards',
        'is_verified',
        'email_verified_at',
        'remember_token',
        'block',
        'reg_date',
        'access_token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
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
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at' => 'datetime',
        'reg_date' => 'datetime'
    ];

    protected $appends = [
        'user_name'
    ];

    /**
     * Mutators
     */

    public function getUserNameAttribute()
    {
        return ucfirst($this->first_name . ' '.$this->last_name);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class, 'user_id', 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id', 'user_id')->with('items');
    }

}
