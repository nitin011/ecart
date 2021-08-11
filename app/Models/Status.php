<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'order_status';
    protected $fillable = ['id', 'title', 'is_deliver_type', 'created_at', 'updated_at', 'deleted_at'];
}
