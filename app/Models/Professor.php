<?php

namespace App\Models;
use App\Models\Turmas;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable=[
        'nome_professor','data_nascimento','genero','estado_civil','contacto','categoria','bi','naturalidade','fotografia','bairro',
        'nivel_academico','profissao','ano_conversao','nr_candidato','curso_caped','congregacao','nome_lider','contacto_lider','nome_relator','numero_cartao_dizimista',
        'ano_lencionamento'
    ];
    public function getTurma(){
        return $this->belongsToMany(Turmas::class);
    }
    public $rules=[
        'nome_professor'=>      'required|min:4|max:80|string',
        'data_nascimento'=>     'date',
        'contacto'=>            'numeric|required',
        'bi'=>                   'required|string',
        'bairro'=>              'string|min:4|max:50',


    ];
}
