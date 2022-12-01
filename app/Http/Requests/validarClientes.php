<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class validarClientes extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:4',
            'ine' => 'required|min_digits:10',
            'email' => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required' => '*Campo obligarotio',
            'ine.required' => '*Campo obligatorio',
            'email.required' => '*Campo obligatorio',
            'nombre.min' => '*Minimo cuatro caracteres',
            'ine.min_digits' => '*Minimo 10 caracteres NUMERICOS',
            'email.email' => '*Correo invalido'
        ];
    }
}
