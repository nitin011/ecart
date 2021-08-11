<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;

    const STATUS = ['active' => 'Active', 'inactive' => 'Inactive'];
    protected $table = 'cities';

    protected $fillable = ['id', 'name','state_or_province_id', 'country_id', 'status', 'created_at', 'updated_at', 'deleted_at'];

    public function stateOrProvince()
    {
        return $this->belongsTo(StateOrProvince::class, 'state_or_province_id','id' );
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id','id');
    }
}
