<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' =>  'required',
            'description' => 'required',
            'quantity' => 'required|min:0|numeric',
            'price' =>  'required|min:0|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'description.required' => 'O campo descrição é obrigatório',
            'quantity.required' => 'O campo quantidade é obrigatório',
            'quantity.numeric' => 'O campo quantidade aceita apenas numeros',
            'quantity.min' => 'O campo quantidade precisa ser maior que 0',
            'price.required' => 'O campo preço é obrigatório',
            'price.min' => 'O campo preço precisa ser maior que 0',
            'price.numeric' => 'O campo preço aceita apenas numeros',
        ];
    }
}
