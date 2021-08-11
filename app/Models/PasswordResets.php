<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordResets extends Model
{
    protected $fillable = ['email', 'token', 'created_at'];

    protected $table = 'password_resets';

    public $timestamps = false;
}
