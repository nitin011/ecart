<?php


namespace App\Repositories\Customer;


use App\Interfaces\Customer\ProductVariantInterface;
use App\Models\Product;
use App\Models\ProductVariant;

class ProductVariantRepository implements ProductVariantInterface
{
    public function getById($variant_id)
    {
        return ProductVariant::findOrFail($variant_id);
    }

    public function getByIdWithProduct($variant_id)
    {
        return ProductVariant::with('product')->findOrFail($variant_id);
    }
}
