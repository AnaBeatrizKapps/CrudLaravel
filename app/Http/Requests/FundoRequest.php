<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FundoRequest extends FormRequest
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
            'nome_fundo'=>'required',
            'qtd_integrantes'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'nome_fundo.required' => 'Insira o nome!',
            'pages.numeric'  => 'Coloque números para a quantidade de integrantes.',
        ];
    }
}
