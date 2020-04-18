@extends('layouts.app')
@section('title')
Serviço Indispónivel!
@stop
@section('content')
    <div class="card mt-5 w-100  pt-5" style="box-shadow: 0 10px 10px ">
        <h5 style="color:#ed1d24" align="center">
           Serviço Indispónivel!
        </h5>
        <div class="card-body d-flex justify-content-center">
            <img src="{{asset('image/undraw_server_down_s4lk.png')}}" width="500px" height="400px" alt="">
        </div>



    </div>

@endsection
