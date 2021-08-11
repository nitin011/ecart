<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    const STATUS = ['active' => 'Active', 'inactive' => 'Inactive'];

    protected $fillable = [
        'id',
        'name',
        'code',
        'alpha_2_code',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function statesOrProvinces()
    {
        return $this->hasMany(StateOrProvince::class, 'country_id', 'id');
    }
}
