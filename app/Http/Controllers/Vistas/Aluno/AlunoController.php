<?php

namespace App\Http\Controllers\Vistas\Aluno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    public function AlunoIndex(){
        return view('Aluno.index');
    }

}
