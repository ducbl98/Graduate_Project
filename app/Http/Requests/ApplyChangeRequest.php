<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyChangeRequest extends FormRequest
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
            'resume' => 'file',
            'phone_number' => ['string','regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/'],
            'email' => 'string',
            'introduction' => 'string',
        ];
    }

    public function messages(): array
    {
        return [
            'regex' => " Yêu cầu nhập đúng định dạng điện thoại",
            'string' => "Yêu cầu kiểu chuỗi",
            'file' => "Yêu cầu kiểu file",
        ];
    }
}
