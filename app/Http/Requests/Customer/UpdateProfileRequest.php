<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'first_name' => 'required',
            'user_email' => 'required|email',
            'user_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',
            'c_password' =>  'required_with:n_password',
        ];
    }

    public function messages()
    {
        return [
            'user_email.required'=>"Email is required.",
            'user_phone.required'=>"Email is required.",
            'c_password.required_with'=>"The current password is necessary when changing the password.",
        ];
    }
}
