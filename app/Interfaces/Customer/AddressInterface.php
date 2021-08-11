<?php
namespace App\Interfaces\Customer;

use App\Models\Address;

interface AddressInterface
{
    public function create(array $data);

    public function getByCustomerId($user_id);

    public function update(array $data, $id);

    public function getAll($user_id);

    public function getById($id);

    public function delete($product_id);

    public function getDefaultAddressByCustomerId($user_id);

    public function getAllAddressesByCustomerId($user_id);

    public function isCustomerAddressExists($user_id);
}

