<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public const ORDER_STATUS = [
        'pending' => 'Pending',
        'confirmed' => 'Confirmed',
        'shipped' => 'Shipped',
        'out_for_delivery' => 'Out For Delivery',
        'completed' => 'Completed',
        'rejected' => 'Rejected',
        'canceled' => 'Canceled',
    ];

    protected $table = 'orders';
    protected $primaryKey = 'order_id';
    protected $fillable = ['order_id', 'user_id', 'store_id', 'address_id', 'cart_id',
        'total_price', 'price_without_delivery', 'total_products_mrp', 'payment_method',
        'paid_by_wallet', 'rem_price', 'order_date', 'delivery_date', 'delivery_charge',
        'time_slot', 'dboy_id', 'order_status', 'user_signature', 'cancelling_reason', 'transaction_info',
        'coupon_id', 'coupon_discount', 'payment_status', 'cancel_by_store', 'created_at',
        'updated_at', 'deleted_at'];
    protected $dates = ['order_date', 'delivery_date', 'updated_at'];

    public function items(): HasMany
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'product_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    /* SCOPE */
    public function scopeById($query, $id)
    {
        return $query->where('order_id', $id);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'order_id', 'order_id');
    }
}
