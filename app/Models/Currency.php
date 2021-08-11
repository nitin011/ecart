<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $timestamps = false;
    protected $table = 'currency';
    protected $fillable = ['id', 'currency_name', 'currency_sign'];
}
