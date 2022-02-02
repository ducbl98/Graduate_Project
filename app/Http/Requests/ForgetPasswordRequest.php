<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
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
            'email' => 'required|email|exists:users',
        ];
    }

    public function messages()
    {
        return [
            'required' => "Trường này là bắt buộc",
            'email' => "Yêu cầu đúng định dạng email",
            'exists'=> "Tài khoản không tồn tại",
        ];
    }
}
