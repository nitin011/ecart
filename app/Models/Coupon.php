<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public const TYPE = ['fixed' => 'Fixed Amount', 'percent' => 'Percent'];
    public $timestamps = false;
    protected $table = 'coupon';
    protected $primaryKey = 'coupon_id';
    protected $fillable = [
        'coupon_id',
        'coupon_name', 'coupon_code',
        'coupon_description', 'start_date',
        'end_date', 'cart_value', 'amount', 'type',
        'uses_restriction'
    ];

    public function discount($total)
    {
        if ($this->type === 'price') {
            return $this->cart_value;
        }
        if ($this->type === 'percentage') {
            return round(($this->amount / 100) * $total);
        }
        return 0;
    }

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
    protected $dates = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
