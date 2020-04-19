@extends('layouts.sidenavbar')
@section('title')
Area
@stop

@section('conteudo')
<div class="content-wrapper">
 <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-8 col-lg-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">
                    <img src=""  alt="">
                    <caption><a href="{{ route('areacadastro.create')}}">Cadastrar</a></caption>
                </div>

            </div>
        </div>
        <div class="col-md-4 col-sm-8 col-lg-4 p-2">
            <div class="card" style="width=:18rem;">
                <div class="card-body">

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
