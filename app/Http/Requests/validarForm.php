<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
class validarForm extends FormRequest
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
            'titulo' => 'required',
            'autor' => 'required',
            'isbn' => 'required|min_digits:13',
            'editorial' => 'required',
            'email' => 'required|email',
            'paginas' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => '*Campo obligatorio',
            'autor.required' => '*Campo obligatorio',
            'isbn.required' => '*Campo obligatorio',
            'isbn.min_digits' => '*Se requieren minimo 13 numeros',
            'editorial.required' => '*Campo obligatorio',
            'email.required' => '*Campo obligatorio',
            'paginas.required' => '*Campo obligatorio',
            'paginas.required' => '*Campo obligatorio',
            'paginas.integer' => '*Solo se aceptan numeros',
            'email.email' => '*Ingrese un correo valido'
        ];
    }
}
