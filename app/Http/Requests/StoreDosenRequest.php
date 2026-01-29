<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDosenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nidn' => 'required|string|unique:dosens,nidn',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:dosens,email',
            'phone_number' => 'required|string|max:20',
        ];
    }
}
