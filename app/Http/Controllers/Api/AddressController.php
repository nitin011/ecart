<?php

namespace App\Http\Controllers\Api;

use App\Models\Address;
use App\Models\City;
use App\Models\Country;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function address(Request $request)
    {
        try {
            Address::query()->where('user_id', $request->user_id)->update(['is_default' => 0]);
            $insertAddress = Address::query()->updateOrCreate($request->except('is_default'), $request->all());
            if ($insertAddress) {
                return ['status' => '1', 'message' => 'Address added successfully.', 'data' => $insertAddress];
            }
            throw new \Exception('Something went wrong');
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function city(Request $request)
    {
        $cities = City::query()->where('status', 'active')->get();
        return ['status' => '1', 'message' => 'cities list', 'data' => $cities];
    }

    public function countries(Request $request)
    {
        try {
            $countries = Country::query()->with(['cities' => function ($q) {
                $q->where('status', 'active');
            }])->where('status', 'active')->get();
            if ($countries->count() > 0) {
                return array('status' => '1', 'message' => 'Society list', 'data' => $countries);
            } else {
                throw new \Exception('Society not found');
            }
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => $e->getMessage(), 'data' => []);
        }
    }


    public function addresses(Request $request)
    {
        try {
            $user_id = $request->user_id;
            $address = Address::query()->where('user_id', $user_id)->where('is_default', 1)->get();
            return array('status' => '1', 'message' => 'Address list', 'data' => $address);
        } catch (\Exception $e) {
            return array('status' => '0', 'message' => 'Address not found! Add Address', 'data' => []);
        }
    }


    public function select_address(Request $request)
    {
        try {
            Address::query()->where('user_id', $request->user_id)->update(['is_default' => 0]);
            Address::query()->where([
                'id' => $request->address_id,
                'user_id' => $request->user_id,
            ])->update(['is_default' => 1]);
            $address = Address::query()->where([
                'id' => $request->address_id,
                'user_id' => $request->user_id,
            ])->firstOrFail();
            return ['status' => '1', 'message' => 'Address Selected', 'data' => $address];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => "Address Not Found", 'data' => []];
        }
    }

    public function destroyAddress(Request $request)
    {
        try {
            Address::query()->findORFail($request->address_id)->delete();
            return ['status' => '1', 'message' => 'Address Removed', 'data' => []];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => 'Address not exists.', 'data' => []];
        }
    }

    public function updateAddress(Request $request)
    {
        try {
            Address::query()->find($request->id)->update($request->all());
            $address = Address::query()->findOrFail($request->id);
            return ['status' => '1', 'message' => 'Address Updated successfully.', 'data' => $address];
        } catch (\Exception $e) {
            return ['status' => 0, 'message' => $e->getMessage(), 'data' => []];
        }
    }

}
