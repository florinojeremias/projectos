@extends('layouts.sidenavbar')
@section('title')
    Criar Usuarios
@stop
@section('scripts')
<link rel="stylesheet" href="{{asset('css/input.css')}}">
@stop
@section('conteudo')
    <div class="container-fluid">
        <div class="text-center p-3">
            <h4 style="color:red">Criar usuarios</h4>
            <hr style="width: 100%">
        </div>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $erro )
                    <li>{{$erro}}</li>

                    @endforeach
                </ul>
            </div>

        @endif
        @if(session('erro'))
        <div class="alery-alert-primary">
            <p>{{session('erro')}}</p>
        </div>
        @endif
        <form action="{{route('usuariocadastro.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 p-4">
                   <input type="text" name="name" class="form-control" autocomplete="off">
                   <label for="name">Nome do Usuario</label>
                </div>
                <div class="col-md-6 p-4">
                    <input type="email" name="email" class="form-control" autocomplete="off">
                    <label for="email">E-mail</label>
                </div>
                <div class="col-md-6 p-4">
                    <input type="password" name="password" class="form-control" >
                    <label for="password">Senha</label>
                </div>
                <div class="col-md-6 p-4">
                    <select name="regra_id" id="" class="form-control">
                        @foreach ($regra as $regras)
                        <option value="{{$regras->id}}">{{$regras->nome}}</option>
                        @endforeach
                    </select>
                    <label for="">Função</label>
                </div>

                <div class="col-md-12">
                    <div class="pl-3"  >

                            <button class="btn btn-primary" type="submit">Gravar</button>

                        </div>
                    </div>
            </div>
        </form>
    </div>
@endsection
