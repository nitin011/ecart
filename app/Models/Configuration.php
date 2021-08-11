<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    const FILE_PATH = "app/public/files/";
    const FILE_URL = "storage/files/";

    protected $table = 'configurations';

    protected $fillable = ['id', 'key', 'title', 'value', 'field', 'description', 'created_at', 'updated_at'];

    protected $casts = [
        'field' => 'array'
    ];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute()
    {
        return (in_array($this->field['type'], ['image', 'file']) && !is_null($this->value)) ? assetUrl(self::FILE_URL . $this->value) : assetUrl('images/home/bg.png');
    }
}
