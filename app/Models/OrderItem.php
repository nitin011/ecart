<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use SoftDeletes;

    protected $table = 'order_items';
    protected $fillable = ['id', 'order_id', 'product_variant_id', 'quantity_value',
        'quantity_unit', 'mrp', 'price', 'short_description',
        'description', 'variant_image', 'extra_data', 'created_at', 'updated_at', 'deleted_at','status','delivery_date'];

    /**
     *  MUTATORS
     * @param $value
     * @return mixed
     */
    public function getExtraDataAttribute($value){
        return json_decode($value, true);
    }

    /**
     * RELATIONSHIPS
     */

    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'product_id', 'product_id');
    }

    public function variant(): HasOne
    {
        return $this->hasOne(ProductVariant::class, 'varient_id', 'product_variant_id');
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }
}
