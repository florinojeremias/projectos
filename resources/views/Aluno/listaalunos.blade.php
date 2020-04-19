@extends('layouts.sidenavbar')
@section('title')
Listagem de Alunos
@stop
@section('conteudo')

<div class="container-fluid">
    <figure class="figure">
        <img src="{{ asset('image/logomeapng.png') }}" class="figure-img img-fluid rounded mx-auto d-block p-1" alt="Imagem nao encontrada." width="7%" height="7%">
        <figcaption class="figure-caption text-center" >
            <h5 style="color:red" class="text-center p-1">Candidatos ao Baptismo</h5>
        </figcaption>
    </figure>

    <div class="row p-4">
        <div class="col-md-4">
            <a href="/aluno/index">
            <button class="button  	fa fa-arrow-left" style="border-radius: 8px;font-size:16px;">Voltar</button>
            </a>
        </div>
    </div>
<form action="{{route('alunos.search')}} " method="POST">
        @csrf
        <div class="row p-4">
            <div class="col-form-label-lg pl-2 pb-2 " >
                <input type="text" placeholder="Género" name="genero" class="form-control">
            </div>
            <div class="col-form-label-lg pl-2  pb-2">
                <input type="date" placeholder="Data de Nascimento" name="data_nascimento" class="form-control">
            </div>
            <div class="col-form-label-lg pl-2  pb-2">
                <input type="text" placeholder="Bairro" name="bairro" class="form-control">
            </div>
            <div class="col-form-label-lg pl-2 pb-2">
                <button type="submit" class="btn btn-outline-primary ">Pesquisar</button>
            </div>


    </div>
    </form>

<div class="table-responsive">
    <table class="table table-striped ">
    <thead class="bg-alert">
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Nome do Candidato</th>
    <th scope="col">Género</th>
    <th scope="col">Data de Nascimento</th>
    <th scope="col">Turma</th>
    <th scope="col">Bairro</th>
    <th scope="col">Acções</th>
    </tr>
    </thead>
    <tbody>
        @foreach($alunos as $aluno)
    <tr>
    <th scope="row">{{$aluno->id}}</th>
    <td>{{$aluno->nome_candidato}}</td>
    <td>{{$aluno->genero}}</td>
    <td>{{$aluno->data_nascimento}}</td>
    <td>{{$aluno->turma}}</td>

    <td>{{$aluno->bairro}}</td>
    <td>
    <a href="{{route('alunoedit.edit',$aluno->id)}}"  class=" fas fa-pencil-alt">
        </a>
        <a href="{{ route('alunodelete.destroy',$aluno->id)}}" class="far fa-trash-alt">
        </a>
        <a href="/aluno/alunorelatorio/{{$aluno->id}}" class="fas fa-print"></a>

    </td>

    @endforeach

    </tr>


    </tbody>

    </table>

</div>
{{$alunos->links()}}




</div>


@endsection
