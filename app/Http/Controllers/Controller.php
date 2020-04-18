<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\Turma_Professor;
use App\Models\Regra;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function Perssinios(){
         //echo($usuario_nome= Auth::user()->password_verify);

       // foreach( auth()->user()->roles as $role){
         //   $permission=$role->permissoes;
           // foreach( $permission as $permission){
             //   echo  $permission->nome;
           // }

        //}
    }
    public function Regras(Request $request){
       //$user= new User;
      //  dd($request);
        //$regras->name=$request->nome;


        //$regras->descricao=$request->descricao;
        //$regras->save();
        //return view('/');
    }

}
