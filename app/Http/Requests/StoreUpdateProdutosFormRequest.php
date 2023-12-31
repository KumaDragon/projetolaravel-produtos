<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  //autorizo todos a executar essa validação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id ?? '';
        $rules = [
            'name' => [
                'required',
                'string',
                'max: 255',
                'min: 3',
            ],
            'valor' => [
                'required',
                'string',  //forma 2 de fazer
            ],
            'quantidade' => [
                'required',
                'min: 1',
                'max: 6',
            ]
        ];

        return $rules;
    }
}
