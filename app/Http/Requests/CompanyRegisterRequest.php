<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|between:2,30',
            'email' => 'required|string|email|max:100|unique:users',
            'phone_number'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:companies',
            'password' => 'required|string|confirmed|min:6',
            'contact_name'=> 'required|string|between:2,30',
            'address'=> 'required|string|between:2,30',
        ];
    }
}
