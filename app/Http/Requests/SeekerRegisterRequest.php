<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeekerRegisterRequest extends FormRequest
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
            'phone_number'=> ['required', 'regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/','min:10','unique:seekers'],
            'password' => 'required|string|confirmed|min:6',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => "Trường này là bắt buộc",
            'string' => "Yêu cầu kiểu chuỗi",
            'email' => "Yêu cầu đúng định dạng email",
            'email.unique' => "Tài khoản email này đã được đăng ký",
            'phone_number.unique' => "Số điện thoại này đã được đăng ký",
            'between' => "Yêu cầu độ dài từ :min đến :max ký tự",
            'max' => "Không được quá :max ký tự",
            'min' => "Yêu cầu độ dài tối thiểu :min ký tự",
            'regex' => " Yêu cầu nhập đúng định dạng điện thoại",
            'confirmed' => "Mật khẩu nhập lại không khớp"
        ];
    }
}
