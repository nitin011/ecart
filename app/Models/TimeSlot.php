<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $primaryKey = 'time_slot_id';
    protected $table = 'time_slot';
    protected $fillable = ['time_slot_id', 'open_hour', 'close_hour', 'time_slog'];
}
