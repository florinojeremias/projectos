<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Area;



class EscolaController extends Controller
{
    private $escola;
    public function __construct(Escola $escola){
        $this->escola=$escola;

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
    public function create(Area $area)
    {
            $area=$area->all();
        return view('Escola.cadastro',compact('area'));
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
          'nome_escola.required'=> 'O campo de Nome da Escola  é de Prienchimento Obrigatório!',
          'relator_pricipal.required'=>'O campo de Nome da Escola  é de Prienchimento Obrigatório!',
          'relator_adjunto'=> 'O campo de Nome da Escola  é de Prienchimento Obrigatório!'


        ];
        $input=$request->all();
        $validate=validator($input,$this->escola->rules,$messages);
        if($validate->fails()){
            return redirect()->back()
            ->withErrors($validate)
            ->withInput();
        }
        $this->escola::create($input);

        return redirect()->route('escolacadastro.create')
               ->with('erro','Escola Cadastrada com sucesso!');;
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
