<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StateOrProvince extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS = ['active' => 'Active', 'inactive' => 'Inactive'];

    protected $table = 'states_or_province';

    protected $fillable = ['id', 'country_id', 'name', 'status', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * Mutators
     */
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'city_id', 'id');
    }
}
