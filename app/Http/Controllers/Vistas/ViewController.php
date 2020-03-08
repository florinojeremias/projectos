<?php

namespace App\Http\Controllers\Vistas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    //
    public function homepage(){
        return \view('welcome');
    }
    public function professorIndex(){
        return \view('Professor\index');
    }
    public function turmaIndex(){
        return \view('Turma.index');
    }
   
}
