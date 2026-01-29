<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
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
            'nim' => 'required|string|unique:mahasiswas,nim',
            'name' => 'required|string|max:255',
            'major' => 'required|string|max:255',
            'entry_year' => 'required|integer|min:2000|max:' . (date('Y') + 1),
        ];
    }
}
