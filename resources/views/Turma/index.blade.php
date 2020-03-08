@extends('layouts.sidenavbar')
@section('title')
Turma
@stop
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <a href="{{ route('turmacadastro.create')}}">Cadastrar</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">

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
