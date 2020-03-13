@extends('layouts.sidenavbar')
@section('title')
    Criar Usuarios
@stop
@section('conteudo')
    <div class="container-fluid">
        <div class="text-center p-3"><h4 style="color:red">Criar usuarios</h4></div>
        <form action=""></form>
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
                        <option value=""></option>
                    </select>

                    <label for="name">Permisões</label>
                </div>
                <div class="col-md-6 p-4">
                   <select name="is_active" id="" class="form-control">
                       <option value="1">Activo</option>
                       <option value="0">Desactivo</option>
                   </select>
                </div>
            </div>

    </div>
@endsection
