<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class areaController extends Controller
{
    private $area;
    public function __construct(Area $area){
        $this->area=$area;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Area.cadastro');
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
            'nome_area.required'=>'O campo de nome da Area e de prienchimento Obrigatorio!',
            'relator_principal.required'=>'O campo de Relator e de prienchimento obrigatorio! ',
            'relator_adjunto.required'=>'O campo de relaor Adjunto e de prienchimento obrigario!'
        ];
        $input=$request->all();
        $validate = validator($input,$this->area->rules,$messages);
        if($validate->fails()){
            return redirect()->back()
            ->withErrors($validate)
            ->withInput();
        }
        $this->area::create($input);
        return redirect()->route('areacadastro.create')
               ->with('error','Area Cadastrado com sucesso!');
       // return response()->json(['succsess'=>'Cadastro Concluido']);

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
