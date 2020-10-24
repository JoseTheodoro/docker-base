<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePratoRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'nome é obrigatório',
            'price.required' => 'preco é obrigatório',
            'price.regex' => 'O preco deve ser no formato 99.99'
        ];
    }
}
