<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($variantData)
 */
class ProductVariant extends Model
{
    public const IMG_PATH = "app/public/product_variants/";
    public const IMG_URL = "storage/product_variants/";

    protected $table = 'product_varient';
    protected $primaryKey = 'varient_id';

    protected $fillable = [
        'varient_id',
        'product_id',
        'quantity',
        'unit',
        'mrp',
        'price',
        'short_description',
        'description',
        'varient_image'
    ];

    protected $appends = ['varient_image_url'];

    public function getVarientImageUrlAttribute()
    {
        return assetUrl(self::IMG_URL.$this->varient_image);
    }

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }

    public function orderVariants()
    {
        return $this->hasMany(OrderItem::class, 'product_variant_id', 'varient_id');
    }
}
