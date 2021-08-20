<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "user_id" => 'required',
            "first_name" => 'required',
            "last_name" => 'sometimes',
            "receiver_phone" => 'required',
            "city_id" => 'required',
            "house_or_flat_no" => 'required',
            "landmark" => 'sometimes',
            "post_code" => 'required',
            "address_line_1" => 'required',
        ];
    }

    public function messages()
    {
        return[
            'user_id.required'=>'User is required.',
            'first_name.required'=>'First Name is required',
            'receiver_phone.required'=>'Phone no. is required',
            'city_id.required'=>'City is required',
            'house_or_flat_no.required'=>'Flat / House / Office no. is required',
            'post_code.required'=>'Postcode is required',
            'address_line_1.required'=>'Address is required',
        ];
    }
}
