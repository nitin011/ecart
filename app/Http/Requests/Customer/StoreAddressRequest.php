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
            "post_code" => 'required'
        ];
    }
}
