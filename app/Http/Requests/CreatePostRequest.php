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
            'amount' => 'required|numeric',
            'work_time' => 'required|numeric',
            'experience' => 'required|string|between:2,50',
            'optional_category' => 'required_without:categories|array',
            'optional_category.*' => 'string|distinct|min:3',
            'technique_type_option' => 'required_with:optional_technique|array',
            'technique_type_option.*' => 'required_with:optional_technique.*|numeric',
            'optional_technique' => 'required_without:techniques|array',
            'optional_technique.*' => 'string|distinct|min:3',
            'salary_min' => 'required_with:salary_max|numeric|min:0|not_in:0',
            'salary_max' => 'required_with:salary_min|numeric|greater_than_field:salary_min',
            'salary_unit' => 'required|string|between:1,7',
            'address'=> 'required|string|between:2,30',
            'province_id' => 'required',
            'expire'=> 'required|date|after:tomorrow',
            'details'=> 'required|string'
        ];
    }
}
