<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    protected $table = 'society';
    public $timestamps = false;

    protected $fillable = ['society_id', 'society_name', 'city_id'];
}
