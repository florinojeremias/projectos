<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserRequest extends FormRequest
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
            'name'=>'required|min:5|max:100',
            'email'=>'required',
            'password'=>'required',

        ];
    }
    public function messages(){
        return [
            'name.required'=>"O campo de nome e de prienchimento obrigatorio e deve possuir no minimo 5 caracteres",
            'email.required'=>"O campo de e-mail e de princimento obrgatorio",
            'password.required'=>"O campo de senha e de princhimento obrigatorio",
            'regra_id.required'=>"O campo de de regra e de prienchimento obrigatorio",
            'is_active.required'=>"O campo de de estdo e de prienchimento obrigatorio"
        ];
    }
}
