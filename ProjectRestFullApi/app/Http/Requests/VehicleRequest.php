<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
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
            'brand' => 'required',
            'price' => 'required|min:0',
            'year' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio',
            'brand.required' => 'O campo marca é obrigatorio',
            'price.required' => 'O campo preço é obrigatorio',
            'price.min' => 'O campo preço não pode ser menor que 0',
            'year.required' => 'O campo ano é obrigatório',
            'year.date' => 'O campo ano é do tipo Data',
        ];
    }
}
