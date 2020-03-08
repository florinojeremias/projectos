<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Aluno;
use App\Models\Escola;
use App\Models\Turmas;
use PDF;

class AlunosController extends Controller
{
    private $aluno;
    public function __construct(Aluno $aluno){
        $this->aluno=$aluno;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Aluno  $aluno)
    {
                $alunos=Aluno::all();
                $turmas=Aluno::select('id')->get();
                $turmasa=Turmas::find($turmas);


                return view('Aluno.listaalunos',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escolas=Escola::all();
        $turmas=Turmas::all();


        return view('Aluno.cadastro',compact('escolas','turmas'));
    }
    public function getTurmas(){

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        // validacao dos dados
        $mesages=[
            'nome_candidato.required'=>'o Campo do Nome e de prienchimento obrigatorio',
            'bi.required'=>'o Campo do Nome e de prienchimento obrigatorio',
            'nome_pai.min:4|max:150'=>'O minimo de caracteres no campo de nome do pai e nome da mae e de 4',
            'bairro.required'=>'O campo de bairro e de prienchimento obrigatorio',
            'casa.numeric'=>'o campo de numero da casa deve possuir somente numeros',


        ];

        $dados=$request->all();

        $validate= validator($dados,$this->aluno->regras,$mesages);
      $this->validate($request,$this->aluno->regras);
       if($validate->fails()){
            return redirect()->back()
            ->withErrors($validate)
            ->withInput();


        }


if($imagem=$request->file('imagem')){
    $nome=$imagem->getClientOriginalName();
    $imagem->move('aluno_imagens',$nome);
    $dados['imagem']=$nome;
}
$this->aluno::create($dados);
    return redirect()->route('alunocadastro.create')
   ->with('error','Aluno Cadastrado com sucesso!');
       // if($request->hasFile('imagem')&& $request->file('imagem')->isValid()){
           //if($this->aluno->imagem)
            //$nome=$this->aluno->imagem;
            //else
           // $nome=$this->aluno->nome_candidato.kebab_case($this->aluno->nome_cadidato);
            //$extension=$request->imagem->getOriginalNmeExtension();
            //$nameFile="{$this->aluno->nome_cadidato}.{$extension}";
           // $imageName = time().'.'.$request->imagem->extension();
            //$request->imagem->move(public_path('images'), $imagem);
           // dd($request->all());
          // $nomeFoto=time().'.'.$request->imagem->getClientOriginalName();
                //$request->imagem->move(public_path('imagem'),'$nomeFoto.jpg');

           //$upload=$request->imagem->store($nomeFoto);
             //   $dados['imagem']=$nomeFoto;




       // }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno=$this->aluno->find($id);


    }







 /**
     * //Retorna um determinado Aluno para o Relatorio
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function relatorio($id){
        $aluno=$this->aluno->find($id);
        $pdf = PDF::loadView('Relatorios.aluno',compact('aluno'));
        return $pdf->stream('aluno.pdf');
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
        $aluno=$this->aluno->find($id);

        return view('Aluno.edit',compact('aluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */


    public function update(Request $request, $id)

    {
        $dados=$request->all();
       $aluno=$this->aluno->find($id);
       $update=$aluno->update($dados);

       if($update)
           return redirect()->route('alunocadastro.index')->with('erro','Dados actualizados com Sucesso!');
           else
           return redirect()->route('alunocadastro.edit')->with('error','Falha ao actualizar!');


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
