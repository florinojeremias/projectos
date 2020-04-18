@extends('layouts.sidenavbar')
@section('title')
Cadastro de Escolas
@stop
@section('estilos')
<link href="{{ asset('css/input.css') }}" rel="stylesheet">
@endsection
@section('conteudo')
    <form action="{{route('escolacadastro.store')}}" method="post" class="form">
        @csrf
        @if(session('erro'))
        <div class="alert alert-primary">
          {{session('erro')}}
        </div>
        @endif
        @if(isset($errors)&& count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $errors)
                <p>{!! $errors !!}</p>
                @endforeach


            </div>

         @endif

        <div class="row">
            <div class="col-md-6 p-3">

               <select autofocus name="area_id" id="" class="form-control">
                   @foreach($area as $areas)
                   <option value="{{$areas->id}}">{{$areas->nome_area}}</option>
                   @endforeach
               </select>

                <label for="name">Área</label>
            </div>
            <div class="col-md-6 p-3">
                <input type="text" autocomplete="off" name="nome_escola" class="form-control" {{old('nome_escola')}}>
                <label for="text">Nome da Escola</label>

            </div>
            <div class="col-md-6 p-3">
                <input autocomplete="off" type="text" name="relator_principal" required class="form-control" {{ old('relator_principal')}}>
                <label for="text">Relator Principal</label>
            </div>
            <div class="col-md-6 p-3">
                <input autocomplete="off" type="text" name="relator_adjunto" class="form-control" {{ old('relator_adjunto') }}>
                <label for="text">Relator Adjunto</label>
            </div>
            <div class="col-md-12">
                <div class="pl-1">
                    <button type="submit" class="btn btn-outline-primary">Gravar</button>
                </div>
            </div>

        </div>

    </form>
@endsection
