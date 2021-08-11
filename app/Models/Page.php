<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';
    protected $fillable = ['id', 'title', 'description', 'content', 'slug', 'created_at', 'updated_at', 'deleted_at'];
}
