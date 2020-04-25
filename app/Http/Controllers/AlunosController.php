<?php

namespace App\Http\Controllers;

use PDF;
use App\User;
use App\Models\Regra;
use  App\Models\Aluno;
use App\Models\Escola;
use App\Models\Turmas;
use Illuminate\Http\Request;
use App\Policies\Aluno as Student;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\Http\Response;
use App\Http\Requests\AlunoUpdateRequest;
use Illuminate\Contracts\Auth\Access\Gate   ;

class AlunosController extends Controller
{
    private $aluno;
    private $totalPaginas=10;

    public function __construct(Aluno $aluno){
        $this->aluno=$aluno;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                $alunos=Aluno::paginate($this->totalPaginas);
                if($alunos->isEmpt())
                    return view('Aluno.listaalunos',compact('alunos'));
                $alunos->each(function($aluno){
                    $turma=Turmas::find($aluno->turma_id);
                    $aluno->turma=$turma->nome_turma;
                });
                return view('Aluno.listaalunos',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {

        $escolas=Escola::all();
        $turmas=Turmas::all();
        $role=Regra::select("nome");

       // $this->authorize('create-aluno',$this->aluno);

       /* if($gate->denies('create-alunos',$this->aluno)){
             abort(403,'Nao estas autorizado');
        }
        */

        return view('Aluno.cadastro',compact('escolas','turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(AlunoRequest $request)
    {
        $dados=$request->all();
        if($imagem=$request->file('imagem')){
        $nome=$imagem->getClientOriginalName();
        $imagem->move('aluno_imagens',$nome);
        $dados['imagem']=$nome;
    }
        $this->aluno::create($dados);
        return redirect()->route('alunocadastro.create')
         ->with('error','Aluno Cadastrado com sucesso!');
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
        return $pdf->stream($aluno->nome_candidato.'.pdf');
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


    public function update(AlunoUpdateRequest $request, $id)

    {
        $dados=$request->all();

       $aluno=$this->aluno->findOrFail($id);
       if($imagem=$request->file('imagem')){
           $nome=$imagem->getClientOriginalName();
           $imagem->move('aluno_imagens',$nome);
           $dados['imagem']=$nome;


       }
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
        echo($id);
        //$aluno=$this->aluno->findOrFAil($id);
        //$aluno->delete();
        //unlink(public_path('aluno_imagens').$aluno->imagem);
        //return redirect('Aluno.index');

    }
    //pesquisa por um determinado registro na tabela dos alunos
    public function search(Request $request){
        $alunos=$this->aluno->search($request->genero,$request->data_nascimento,$request->bairro);
        $alunos->each(function($aluno){
            $turma=Turmas::find($aluno->turma_id);
            $aluno->turma=$turma->nome_turma;
        });
        return view('Aluno.listaalunos',compact('alunos'));
    }
}
