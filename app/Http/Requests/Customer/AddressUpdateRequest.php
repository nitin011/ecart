<?php

    namespace App\Http\Requests\Customer;

    use Illuminate\Foundation\Http\FormRequest;

    class AddressUpdateRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {
            return true;
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
                "receiver_name" => 'required',
                "receiver_phone" => 'required',
                "city" => 'required',
                "society" => 'required',
                "house_or_flat_no" => 'required',
                "landmark" => 'required',
                "state" => 'required',
                "pincode" => 'required|digits:6'
            ];
        }
    }
