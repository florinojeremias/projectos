<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use PDF;

class PdfalunoController extends Controller
{
    public function alunoPdf(){

        $pdf = PDF::loadView('Relatorios.aluno');
        return $pdf->stream('aluno.pdf');
        //return $pdf->setPaper('a4');
    }

}

