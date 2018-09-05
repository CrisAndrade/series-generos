<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class serieRequest extends FormRequest
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
            'nome' => 'max:5|min:2|required',
            'genero' => 'max:15|min:2|required',
            'descricao' => 'max:255|min:2|required',
        ];
    }

    public function messages()
    {
        return[
            'required' => 'O campo :attribute é obrigatorio',
            'nome.max' => 'O campo :attribute não pode passar de 5 caracteres',
            'nome.min' => 'O campo :attribute não pode ser menor que 2 caracteres',
            'genero.max' => 'O campo :attribute não pode passar de 15 caracteres',
            'genero.min' => 'O campo :attribute não pode ser menor que 2 caracteres',
            'descricao.max' => 'O campo :attribute não pode passar de 255 caracteres',
            'descricao.min' => 'O campo :attribute não pode ser menor que 2 caracteres'
        ];
    }
}
