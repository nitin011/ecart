<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($product_id)
 * @method static findOrFail($product_id)
 * @method static create($product)
 * @method static where($column, $operator = null, $value = null, $boolean = 'and')
 */
class Product extends Model
{
    public const IMG_PATH = "app/public/products/";
    public const IMG_URL = "storage/products/";

    public const LIVEWIRE_FILE_PATH = 'storage/products/files';
    public const LIVEWIRE_FILE_URL = 'public/products/files';

    protected $table = 'product';
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_id', 'cat_id', 'product_name', 'product_image'];

    protected $appends = ['product_image_url'];

    public function getProductImageUrlAttribute()
    {
        return assetUrl(self::IMG_URL.$this->product_image);
    }

    public $timestamps = false;

    /**
     * Relationships
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'cat_id', 'cat_id');
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'product_id');
    }

    /*public function orders()
    {
        return $this->hasMany(Order::class, 'product_id', 'id');
    }*/
}
