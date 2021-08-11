<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use SoftDeletes;

    const IMG_PATH = "app/public/admins/";
    const IMG_URL = "storage/admins/";

    protected $table = 'admins';

    protected $fillable = ['id', 'name', 'email', 'password', 'image', 'remember_token', 'crated_at', 'updated_at', 'deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['image_url'];


    public function getImageUrlAttribute()
    {
        return assetUrl(is_null($this->image) ? 'assets/login/images/admin-icon.png' : self::IMG_URL . $this->image);
    }

    public function setAdminPassAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
