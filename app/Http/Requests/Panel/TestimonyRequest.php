<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class TestimonyRequest extends FormRequest
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
            'age' => 'nullable',
            'profession' => 'nullable',
            'description' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo Nome é obrigatório.',
            'description.required' => 'O campo Depoimento é obrigatório.'
        ];
    }
}
