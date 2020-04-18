<?php

namespace App\Policies;

use App\Models\Permicao;
use App\Models\Regra;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Aluno
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public static  function createAluno(){

        /* $regra=Regra::find(auth()->user()->id);


         $permisoes=$regra->permissoes;
         foreach($permisoes as $permission){
             return $permission->nome=='create_alunos';
         }

        }






//dd(Regra::where("user_id",auth()->user()->id));
         // dd( !Permicao::where("user_id",auth()->user()->id)->get()->permissoes->where("nome","create_alunos")->isEmpty());


    }
}
