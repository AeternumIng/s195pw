<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarLibro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ISBN' => 'required|min:13',
            'Titulo' => 'required|max:150',
            'Paginas' => 'required|numeric|min:1',
            'Año' => 'required|numeric|min:1|max:2024',
            'Editorial' => 'required',
            'email' => 'required|email'
        ];
    }
}
