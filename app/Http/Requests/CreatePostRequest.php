<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|string',
            'application_email' => 'required|string|email|max:100',
            'amount' => 'required|number',
            'work_time' => 'required|number',
            'experience' => 'required|string|between:2,50',
            'salary_min' => 'required_with:salary_max|number|min:0|not_in:0',
            'salary_max' => 'required_with:salary_min|number|greater_than_field:salary_min',
            'salary_unit' => 'required|string|between:1,7',
            'address'=> 'required|string|between:2,30',
            'expire'=> 'required|date|after:tomorrow',
            'detail'=> 'required|string'
        ];
    }
}
