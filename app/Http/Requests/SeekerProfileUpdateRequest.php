<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeekerProfileUpdateRequest extends FormRequest
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
//            'phone_number'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:seekers,phone_number,'.$this->user()->seeker->id,
            'phone_number' => ['required','regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/','min:10','unique:seekers,phone_number,'.$this->user()->seeker->id],
            'address'=> 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'required' => "Trường này là bắt buộc",
            'string' => "Yêu cầu kiểu chuỗi",
            'between' => "Yêu cầu độ dài từ :min đến :max ký tự",
            'phone_number.unique' => "Số điện thoại này đã được đăng ký",
            'min' => "Yêu cầu độ dài tối thiểu :min ký tự",
        ];
    }
}
