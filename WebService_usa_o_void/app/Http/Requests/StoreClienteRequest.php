<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'nome_cli' => 'required|min:2|max:100',
            'cnpj_cli' => 'required|min:4|max:100',
            'cep_cli' => 'required|min:4|max:100',
            'endereco_cli' => 'required|min:3|max:100',
            'numero_end' => 'required|min:1',
            'bairro' => 'required|min:1|max:30',
            'ibge' => 'required|min:1|max:30',
            'cidade' => 'required|min:1|max:40',


        ];
    }

    public function messages()
    {
        return [
            'nome_cli.required' => 'o campo nome é de preenchimento obrigatório',
            'cnpj_cli.required' => 'o campo cnpj é de preenchimento obrigatório',
            'cep_cli.required' => 'o campo cep é de preenchimento obrigatório',
            'endereco_cli.required' => 'o campo endereço é de preenchimento obrigatório',
            'numero_end.required' => 'o campo numero é de preenchimento obrigatório',
            'bairro.required' => 'o campo bairro é de preenchimento obrigatório',
            'ibge.required' => 'o campo ibge é de preenchimento obrigatório',
            'cidade.required' => 'o campo cidade é de preenchimento obrigatório',

        ];
    }
}
