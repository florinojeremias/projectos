<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turmas;
use App\Models\Area;
use App\Models\Escola;

class TurmaController extends Controller
{   private $turma;
    public  function __construct(Turmas $turma){
        $this->turma=$turma;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Area $area)
    {

        $area=$area->all();
        $area_id=Area::find('id');
        $Escolas=Escola::all();
        $nome_area=Area::select('nome_area')->get();
        return view('Turma.cadastro',compact('area_id','area','nome_area','Escolas'));
    }

    public function getEscolas(Request $request){
        return view('Turma.cadastro');
        if($request->ajax()){
            $areaa=Area::with("escolas")->find($request->area_id);
            $escolas=$areaa->escolas;
            return response($escolas);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $messagens=[

            'codigo_turma'=>'o campo codigo turma e de Prienchimento obrigatorio',
            'relator_principal'=>'o campo de Relator Principla e de princhimento obrigatorio e so pode existir um Relator principal',
            'nome_turma'=>'O campo de Nome da turma e de prienchimento obrigatorio',

        ];
        $dados=$request->all();

        $validate=validator($dados,$this->turma->regras,$messagens);
        if($validate->fails()){
            return redirect()->back()
            ->withErrors($validate)->withInput();
        }
        $this->turma::create($dados);

        return redirect()->route('turmacadastro.create')
                         ->with('erro','Turma inserida Com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
