@extends('layouts.app')
@section('title')
Sem Permissão!
@stop
@section('content')
    <div class="card mt-5 w-100 pt-5" style="box-shadow: 0px 10px 10px">
        <h5 style="color:#ed1d24" align="center">
            Não tem Permissão para acessar essa Página!
        </h5>
        <div class="card-body">
            <img src="{{ asset('image/undraw_cancel_u1it.png')}}" width="400px" height="400px"alt="">
        </div>

    </div>
@endsection
