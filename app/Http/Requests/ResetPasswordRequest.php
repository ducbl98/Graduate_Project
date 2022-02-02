<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email' => 'required|email|exists:password_resets',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => "Trường này là bắt buộc",
            'email' => "Yêu cầu đúng định dạng email",
            'string' => "Yêu cầu kiểu chuỗi",
            'min' => "Yêu cầu độ dài tối thiểu :min ký tự",
            'confirmed' => "Mật khẩu nhập lại không khớp",
            'exists' => "Yêu cầu đặt lại mật khẩu không tồn tại"
        ];
    }
}
