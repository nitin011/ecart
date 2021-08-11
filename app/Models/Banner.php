<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    const IMG_PATH = "app/public/banners/";
    const IMG_URL = "storage/banners/";

    const BANNER_TYPES = [
        'home_main_slider' => 'Home Main Slider',
        'snack_store_banner' => 'Snack Store',
        'drinks_beverages' => 'Drinks & Beverages',
        'promotional_banner' => 'Promotional Banner',
        'hero_banner'=>'Hero Banner'
    ];

    public $timestamps = false;
    protected $table = 'banner';
    protected $primaryKey = 'banner_id';

    protected $fillable = ['banner_id', 'banner_image', 'banner_name', 'sub_title', 'slogan', 'type', 'button_title', 'button_route'];

    protected $appends = ['banner_image_url'];

    public function getBannerImageUrlAttribute()
    {
        return assetUrl($this->banner_image);
    }
}
