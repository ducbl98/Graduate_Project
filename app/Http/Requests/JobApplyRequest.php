<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplyRequest extends FormRequest
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
            'job_id' => 'required',
            'user_id' => 'required|numeric',
            'resume' => 'required|file',
            'phone_number' => 'required|string',
            'email' => 'required|string',
            'introduction' => 'required|string',
        ];
    }
}
