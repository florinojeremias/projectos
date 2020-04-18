<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'nome_candidato'=>       'required|min:4|max:150',
            'nome_pai'=>             'min:4|max:100',
            'nome_mae'=>             'min:4|max:100',
            'bi'=>                   'required|min:10|max:15',
            'naturalidade'=>         'min:5|max:100',
            'imagem'=>               'required|mimes:jpeg,png,jpg,ico,icon,gif,|max:2048',
            'data_nascimento'=>       'required',
            'bairro'=>                'string|min:5|:max:80',
            'contacto'=>                'numeric',
            'nivel_academico'=>           'string'
        ];
    }
    public  function messages()
    {
        return[
            'nome_candidato.required'               =>'o Campo do Nome e de prienchimento obrigatorio',
            'nivel_academico.string|min:4|max:50'   =>'O campo de nivel academico deve possuir somente letras',
            'nome_pai.min:4|max:100'                =>'O campo de Nome de Pai e de Prienchimento obrigatorio',
            'nome_mae.min:4|max:100'                =>'O campo de Nome do pai e de prienchimento obrigatorio',
            'imagem.required'                       =>'O campo da imagem e de prienchimento obrigatorio',
            'data_nascimento'                       =>'O campo de data de NAscimento e de prienchimento obrigatorio',
            'bi.required'                           =>'o Campo do Nome e de prienchimento obrigatorio',
            'nome_pai.min:4|max:150'                =>'O minimo de caracteres no campo de nome do pai e nome da mae e de 4',
            'bairro.required'                       =>'O campo de bairro e de prienchimento obrigatorio',
            'contacto.numeric'                      =>'o campo de contacto  e obrigatorio',
            'naturalidade.min:5|max|100'            =>'O  campo de naturalidade e de prienchimento obrigatorio'
        ];
    }
}
