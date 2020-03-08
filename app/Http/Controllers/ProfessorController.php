<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    private $professor;
    public function __construct(Professor $professor){
            $this->professor=$professor;
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
    public function create()
    {
         return view('Professor.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
        'nome_professor.required'=>         'o campo de Nome do Professor e de prienchimento Obrigatorio',
        'data_nascimento.date'=>                'Insira uma data inferior a data actual',
        'contacto.numeric'=>                    'o campo de Contacto e de Prienchimento Obrigatorio',
        'bi.required'=>                         'O campo de Numero de Bi e de prienchimento Obrigatorio',
        'bairro.string|min:4|max:50'=>           'o campo de nao pode exceder 50 caracteres',


        ];
        $input=$request->all();
        $validate=validator($input,$this->professor->rules,$messages);
        if($validate->fails()){
            return redirect()->back()
            ->withErrors($validate)->withInput();

        }
        if($imagem=$request->file('fotografia')){
             $nomeFoto=time().'.'.$request->fotografia->getClientOriginalName();
            $imagem->move('professor_imagens',$nomeFoto);
            $input['fotografia']=$nomeFoto;
        }



        $this->professor::create($input);
        return redirect()->route('professorcadastro.create')
        ->with('error','Professor Cadastrado Com sucesso!');
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
