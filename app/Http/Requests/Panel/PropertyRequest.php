<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'type_immobile_id' => 'required',
            'name' => 'required',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'suites' => 'numeric',
            'garage' => 'numeric',
            'area' => 'required|min:0.00',
            'approximate_area' => 'required|min:0.00',
            'description' => 'required',
            'price' => 'required',
            // 'condominium' => '',
            'tax' => 'required',
            'zipcode' => 'required',
            'street' => 'required',
            // 'number' => '',
            // 'complement' => '',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required'
        ];
    }

    public function messages() {
        return [
            'type_immobile_id.required' => 'Selecione o tipo do imóvel',
            'name.required' => 'O campo Nome é obrigatório.',
            'bedrooms.required' => 'O campo Quartos é obrigatório.',
            'bathrooms.required' => 'O campo Banheiros é obrigatório.',
            'area.required' => 'O campo Área é obrigatório.',
            'approximate_area.required' => 'O campo Área aproximada é obrigatório.',
            'description.required' => 'O campo Descrição é obrigatório.',
            'price.required' => 'O campo Preço é obrigatório.',
            'tax.required' => 'O campo IPTU é obrigatório.',
            'zipcode.required' => 'O campo Cep é obrigatório.',
            'street.required' => 'O campo Rua é obrigatório.',
            'neighborhood.required' => 'O campo Bairro é obrigatório.',
            'city.required' => 'O campo Cidade é obrigatório.',
            'state.required' => 'O campo Estado é obrigatório.',

            'suites' => 'numeric',
            'garage' => 'numeric',
            // 'condominium' => '',
            // 'number' => '',
            // 'complement' => '',
        ];
    }
}
