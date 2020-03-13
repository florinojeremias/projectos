@extends('layouts.sidenavbar')
@section('title')
    Usuarios
@stop
 @section('conteudo')
 <h4 class="text-center p-3" style="color:red" >Usuarios Cadastrados</h4>
 <div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="bg-alert">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Permição</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Data de criacao</th>
                </tr>
            </thead>
            <tbody>
                @if($users)
                    @foreach ( $users as $user )


                <tr>
                    <th scope="row">
                        {{$user->id}}
                     </th>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>{{$user->regra->nome}}</td>
                    <td>{{$user->is_active==1?'Activo':'Nao esta Activo'}}</td>
                    <td>
                        {{$user->created_at}}
                    </td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>

    </div>
 </div>

 @endsection


