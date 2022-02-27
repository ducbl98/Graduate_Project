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
            'technique_type_option.*' => 'numeric',
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

    public function messages(): array
    {
        return [
            'required' => "Trường này là bắt buộc",
            'string' => "Yêu cầu kiểu chuỗi",
            'email' => "Yêu cầu đúng định dạng email",
            'numeric' => "Yêu cầu kiểu số",
            'optional_category.required_without' => "Yêu cầu trường này khi danh mục trống ",
            'optional_technique.required_without' => "Yêu cầu trường này khi công nghệ trống ",
            'technique_type_option.required_with'=>"Yêu cầu trường này đi kèm",
            'distinct'=>"Yêu cầu không trùng nhau",
            'between' => "Yêu cầu độ dài từ :min đến :max ký tự",
            'max' => "Không được quá :max ký tự",
            'min' => "Yêu cầu độ dài tối thiểu :min ký tự",
            'salary_max.greater_than_field'=>"Yêu cầu lớn hơn trường lương thấp nhất",
            'not_in' => " Yêu cầu lớn hơn 0",
            'after' => "Ngày hết hạn không hợp lệ"
        ];
    }
}
