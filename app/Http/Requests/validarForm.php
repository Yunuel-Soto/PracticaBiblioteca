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
            'isbn' => 'required|min:13|integer',
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
            'isbn.integer' => '*Solo se aceptan numeros',
            'isbn.min' => '*Solo se aceptan numeros',
            'editorial.required' => '*Campo obligatorio',
            'email.required' => '*Campo obligatorio',
            'paginas.required' => '*Campo obligatorio',
            'paginas.required' => '*Campo obligatorio',
            'paginas.integer' => '*Solo se aceptan numeros',
            'email.email' => '*Ingrese un correo valido'
        ];
    }
}
