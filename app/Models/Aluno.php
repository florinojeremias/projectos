<?php

namespace App\Models;
use App\Models\Turmas;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable=[
        //dados que deverao ser prienchidos nas views
        'nome_candidato','nome_pai','nome_mae','naturalidade','distrito','bi','imagem','bairro',
        'avenida','data_nascimento','estado_civil','nivel_academico','profissao','quarteirao',
        'casa','contacto','genero','turma_id','ano_conversao','igreja_proviniencia','escola_dominical','ano_entrada',
        'ultima_turma','professor','tipo_baptismo','data_baptismo','numero_baptismo','congregacao_mea','lider_pg','contacto_lider'
    ];


    //regras de validacao dos dados
    public   $regras=[
        'nome_candidato'=>       'required|min:4|max:150',
        'nome_pai'=>             'min:4|max:100',
        'nome_mae'=>             'min:4|max:100',
        'bi'=>                   'required|min:10|max:15',
        'naturalidade'=>         'min:5|max:100',
        'imagem'=>               'required|mimes:jpeg,png,jpg,ico,icon,gif,|max:2048',


    ];
    public function  turma(){
        return $this->belongsTo(Turmas::class,'id');
    }
    public function search($genero,$data_nascimento,$bairro){
        $resultado=$this->where( function($query) use ($genero,$data_nascimento,$bairro){

            if($genero){
                $query->where('genero','=',$genero);
            }
            elseif( $data_nascimento){
                $query->where('data_nascimento','=',$data_nascimento);
            }
            else
            $query->where('bairro','=',$bairro);

        })->paginate();
       return $resultado;

    }

}
