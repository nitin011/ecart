<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $table = 'addresses';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'receiver_phone',
        'house_or_flat_no',
        'address_line_1',
        'address_line_2',
        'latitude',
        'longitude',
        'is_default',
        'country_id',
        'city_id',
        'post_code',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $appends = [
        'full_name',
        'full_address'
    ];

    /**
     * Mutators
     */
    public function getFullAddressAttribute()
    {
        return $this->house_or_flat_no . ' ' . $this->address_line_1 . ' ' . $this->address_line_2;
    }

    public function getFullNameAttribute()
    {
        return ucfirst($this->first_name . ' ' . $this->last_name);
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
