<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
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
                'imagem'=>               'mimes:jpg,peg,ico,icon,jpeg|max:2048',
                'data_nascimento'=>       'required',
                'bairro'=>                'string|min:5|:max:80',
                'contacto'=>                'numeric',
                'nivel_academico'=>           'string'
            ];

    }
}
