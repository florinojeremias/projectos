@extends('layouts.app')
@section('title')
Pagina nao encontrada!
@stop
@section('content')
    <div class="card mt-5 w-100  pt-5" style="box-shadow: 0 10px 10px ">
        <h5 style="color:#ed1d24" align="center">
            Página não Econtrada!
        </h5>
        <div class="card-body d-flex justify-content-center">
            <img src="{{asset('image/undraw_towing_6yy4.png')}}" width="500px" height="400px" alt="">
        </div>



    </div>

@endsection
