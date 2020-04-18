<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessorRequest extends FormRequest
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
            'nome_professor'=>      'required|min:4|max:80|string',
            'data_nascimento'=>     'date',
            'contacto'=>            'numeric|required',
            'bi'=>                  'required|string',
            'bairro'=>              'string|min:4|max:50',
            'naturalidade'=>        'string|min:4|max:50',
            'bairro'=>              'string|min:2|max:100',
            'nivel_academico'=>     'string',
            'profissao'=>           'string',
            'ano_conversao'=>       'numeric|min:4|max:4',
            'curso_caped'=>         'string',
            'numero_candidato'=>    'number',
            'congregacao'=>         'string',
            'nome_lider'=>          'string'
        ];
    }
    public function messages()
    {
        return[
            'nome_professor.required'=>             'o campo de Nome do Professor e de prienchimento Obrigatorio',
            'data_nascimento.date'=>                'Insira uma data inferior a data actual',
            'contacto.numeric'=>                    'o campo de Contacto e de Prienchimento Obrigatorio',
            'bi.required'=>                         'O campo de Numero de Bi e de prienchimento Obrigatorio',
            'bairro.string|min:4|max:50'=>           'o campo de nao pode exceder 50 caracteres',


        ];
    }
}
