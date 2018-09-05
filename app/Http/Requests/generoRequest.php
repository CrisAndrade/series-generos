<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class generoRequest extends FormRequest
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

    
}
