<?php


namespace App\Interfaces\Customer;


interface ProductVariantInterface
{
    public function getById($variant_id);

    public function getByIdWithProduct($variant_id);
}
