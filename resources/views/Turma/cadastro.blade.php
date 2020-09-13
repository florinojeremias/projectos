@extends('layouts.master')
@section('title')
Cadastro da Turma
@stop
@section('scripts')
    <script src="{{ asset('js/getturmasalunos.js')}}">
    </script>
@stop
@section('estilos')
    <link href="{{ asset('css/input.css') }}" rel="stylesheet">
@endsection
@section('conteudo')
    <div class="container">
        <h3 style="color:red" class="text-center p-2">Cadastro de Turmas</h3>
    <form action="{{route('turmacadastro.store')}}" method="post"  id="formturma">
@csrf
@if(session('erro'))
        <div class="alert alert-primary">
          {{session('erro')}}
        </div>
        @endif
 @if(isset($errors) && count($errors)>0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
        <p>{{!!$errors!!}}</p>
        @endforeach

    </div>
 @endif
<div class="row">
    <div class="col-md-6 p-4">
        <input name="nome_turma" type="text" class="form-control " autocomplete="off"{{ old('nome_turma')}}>
        <label for="name">Nome da Turma</label>

    </div>
    <div class="col-md-6 p-4">
        <input name="codigo_turma" type="text" class="form-control " autocomplete="off" {{old('codigo_turma')}}>
        <label for="cod">Codigo da Turma</label>

    </div>
    <div class="col-md-6 p-3">
     <input type="text" name="professor_principal" id="" class="form-control" autocomplete="off"{{old('professor_principal')}} >
        <label for="name">Professor Principal</label>

    </div>
    <div class="col-md-6 p-3">
       <input type="text" name="professor_adjunto" class="form-control" autocomplete="off"{{old('professor_adjunto')}}>
        <label for="name">Professor Adjunto</label>

    </div>



    <div class="col-md-12">
        <div class="pl-0">
            <button type="submit" class="btn btn-outline-primary">Gravar</button>
        </div>
    </div>

</div>

</form>


@endsection
