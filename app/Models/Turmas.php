<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Escola;



class Turmas extends Model
{

    protected $fillable=[
        'codigo_turma','professor_principal','professor_adjunto','nome_turma'
    ];



    public $regras=[
        'codigo_turma'=>            'required|min:2|max:8',
        'professor_principal'=>     'required|min:6|max:100|string',
        'professor_adjunto'=>        'required|min:6|max:100|string',
        'nome_turma'=>                'required|min:2|max:40|string',


    ];

    public function turmas(){
        return $this->hasMany(Aluno::class);
    }

}
