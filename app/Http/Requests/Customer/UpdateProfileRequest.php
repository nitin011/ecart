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
            'user_email' => 'nullable|email|',Rule::unique('users', 'user_email')->ignore($this->user),
            'user_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:12',Rule::unique('users', 'user_phone')->ignore($this->user)
        ];
    }
}
