<?php


namespace App\Repositories\Customer;


use App\Interfaces\Customer\AddressInterface;
use App\Models\Address;
use App\Models\City;
use App\Models\Country;

class AddressRepository implements AddressInterface
{
    public function __construct()
    {
    }

    public function create(array $data)
    {
        $city = City::query()->findOrFail($data['city_id']);
        $data['country_id'] = $city->country_id;
        $data['state_id'] = $city->state_id;
        (isset($data['is_default']) && $data['is_default'] == 1) ? Address::query()->where('user_id', $data['user_id'])->update(['is_default' => 0]) : null;
        return Address::query()->create($data);
    }

    public function getByCustomerId($user_id)
    {
        return Address::query()->where('user_id', $user_id);
    }

    public function update(array $data, $id)
    {
        if (isset($data['is_default']) && $data['is_default'] == 1) {
            Address::query()->where('user_id', $data['user_id'])->update(['is_default' => 0]);
        }
        return Address::query()->findOrFail($id)->update($data);
    }

    public function getAll($user_id)
    {
        return Address::query()->with('customer')->where('user_id', $user_id)->get();
    }

    public function getById($id)
    {
        return Address::query()->findOrFail($id);
    }

    public function delete($product_id)
    {
        $address = Address::query()->findOrFail($product_id);
        if ($address->is_default == 1) {
            return ['status' => false, 'message' => "This is Default Address Cannot be delete."];
        }
        $address->delete();
        return ['status' => true, 'message' => 'Address Deleted Successfully'];
    }

    public function getDefaultAddressByCustomerId($user_id)
    {
        return Address::query()->where('user_id', $user_id)->where('is_default', 1)->first();
    }

    public function getAllAddressesByCustomerId($user_id)
    {
        return Address::query()->where('user_id', $user_id)->get();
    }

    public function isCustomerAddressExists($user_id)
    {
        return Address::query()->where('user_id', $user_id)->exists();
    }
}
