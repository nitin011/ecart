<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderStatusHistory extends Model
{
    protected $table = 'order_status_history';
    protected $fillable = ['id', 'order_id', 'status_id', 'delivery_boy_id', 'comment', 'updated_by', 'created_at', 'updated_at', 'deleted_at'];

    // Relations

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
