<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'genero' => 'max:15|min:3|required',
            'idade_minima' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'required' => 'O campo :attribute é obrigatorio',
            'genero.min' => 'O campo :attribute não pode ser menor que 3 caracteres',
            'genero.max' => 'O campo :attribute não pode passar de 15 caracteres',
        ];
    }

    
}
