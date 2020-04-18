@extends('layouts.sidenavbar')
@section('title')
Criar regras
@stop
@section('conteudo')
<div class="container-fluid">
    <div class="text-center p-3">
        <h4  style="color:red">Criação de Regras
        </h4> <hr >
    </div>
<form action=" {{ route('regrascadastro.store')}}" method="post">
    @if(session('error'))
    <div class="alert alert-primary">
        {{session('error')}}
    </div>
    @endif
    @csrf
    <div class="form-group">

        <div class="row">
            <div class="col-md-6 p-3">
                <input type="text" name="nome" class="form-control" autocomplete="off">
                <label for="name">Nome da Regra</label>
            </div>
            <div class="col-md-6 p-3">
                <input type="text" name="decricao" class="form-control" autocomplete="off">
                <label for="name">Descrição</label>
            </div>
            <div class="col-md-12 p-4">
                <div class="pl-3">
                   <button type="submit" class="btn btn-primary">Gravar</button>
                </div>

            </div>
        </div>
    </div>

</form>
</div>
@endsection
