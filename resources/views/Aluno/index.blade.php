@extends('layouts.master')
@section('title')
Aluno
@stop
@section('conteudo')
<div class="content-wrapper">
 <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-8 col-lg-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <img src="{{asset('image/student.png')}}"  alt="">
                    <caption><a href="{{ route('alunocadastro.create')}}">Cadastrar</a></caption>
                </div>

            </div>
        </div>
        <div class="col-md-4 col-sm-8 col-lg-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <img src="{{asset('image/useredit.png')}}" alt="" srcset="">
                        <a href="{{route('alunolistagem.index')}}">Editar</a>
                </div>

            </div>
        </div>
        <div class="col-md-4 p-2 col-sm-8 col-lg-4">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <div></div>
                </div>

            </div>
        </div>

    </div>

 </div>
</div>
@endsection
