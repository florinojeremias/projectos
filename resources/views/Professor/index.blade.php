@extends('layouts.sidenavbar')
@section('title')
    Professores
@stop
@section('conteudo')
    <div class="container">
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <img src="{{asset('image/teacher.png')}}" alt="" srcset="">
                    <a href="{{ route('professorcadastro.create')}}">Cadastrar</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <a href="{{route('indisponivel')}}">Alocar a uma Turma</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">

                </div>

            </div>
        </div>

    </div>
    </div>

@endsection
