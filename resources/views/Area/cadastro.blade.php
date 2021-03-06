@extends('layouts.master')
@section('title')
    Cadastro da Area
    @stop
    @section('scripts')
    <script src="{{ asset('js/postarea.js')}}"></script>
    @stop
    @section('estilos')
        <link href="{{ asset('css/input.css') }}" rel="stylesheet">
    @endsection
@section('conteudo')
 <div class="container">
    <h3 style="color:red" class="text-center p-2">Cadastro de Regiões</h3>
 </div>

  <form id="formarea" method="POST" action="{{ route('areacadastro.store')}}" class="form">
    @csrf

    @if(isset($errors)&& count($errors)>0)

    <div class="alert alert-danger">
        @foreach( $errors->all() as $erros)
        <p>{{$erros}}</p>
        @endforeach
    </div>

   @endif
   @if(session('error'))
   <div class="alert alert-primary">
     {{session('error')}}
   </div>
   @endif

    <div class="row">
        <div class="col-md-6 p-4">
            <input name="nome_area" type="text" class="form-control" autocomplete="off" {{old('nome_area')}}>
            <label for="name">Nome da Área</label>
        </div>
        <div class="col-md-6 p-4">
            <input name="relator_principal" type="text" class="form-control" autocomplete="off" {{ old('relator_principal')}}>
            <label for="name">Relator Principal</label>
        </div>
        <div class="col-md-6 p-4">
            <input name="relator_adjunto" type="text" class="form-control" autocomplete="off" {{ old('relator_adjunto')}}>
            <label for="name">Relator Adjunto</label>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pl-3">
                <button type="submit" class="btn btn-primary pl-4">Gravar</button>

            </div>


        </div>
    </div>



  </form>



@endsection
