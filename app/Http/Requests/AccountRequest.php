<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'name' => 'required|max:20',
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'dob' => 'required',
            'phone_no' => 'required|max:25|min:6',
            'email' => 'required',
            'address' => 'required|max:200|min:10',
            'hobby' => '',
            'gender' => 'required',
            'country' => 'required',
        ];

    }
}
