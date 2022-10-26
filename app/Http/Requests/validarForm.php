<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'isbn' => 'required',
            'editorial' => 'required',
            'email' => 'required',
            'paginas' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => '*Campo obligatorio',
            'autor.required' => '*Campo obligatorio',
            'isbn.required' => '*Campo obligatorio',
            'editorial.required' => '*Campo obligatorio',
            'email.required' => '*Campo obligatorio',
            'paginas.required' => '*Campo obligatorio'
        ];
    }
}
