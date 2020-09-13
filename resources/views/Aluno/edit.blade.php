@extends('layouts.master')
@section('title')
Editar Dados dos Alunos
@stop
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/input.css')}}">
@stop
@section('conteudo')
<div class="content-wrapper">
 <div class="container-fluid">
    <figure class="figure">
        <img src="{{ asset('image/logomeapng.png') }}" class="figure-img img-fluid rounded mx-auto d-block p-1" alt="Imagem nao encontrada." width="8%" height="8%">
        <figcaption class="figure-caption text-center" >
            <h4 style="color:red">Edição dos dados dos Candidatos ao Baptismo</h4>
        </figcaption>
    </figure>
    <form enctype="multipart/form-data" action="{{ route('alunocadastro.update',$aluno->id)}}" method="POST" class="form">
        {!! method_field('PUT')!!}
        @csrf
        <ul class="nav nav-tabs  nav-justified">
            <li class="active">
                <a href="#dadospessoaistab" data-toggle="tab" class="p-3">
                    Dados Pessoais
                </a>
            </li>
            <li id="tab1">
                <a href="#ocupacaotab" data-toggle="tab" class="p-3">Ocupação</a>
            </li>
           <li id="tab2">
            <a href="#perfilcristaotab" data-toggle="tab" class="p-3">Perfil Cristão </a>
           </li>
        </ul>
        @if(isset($errors)&& count($errors)>0)

        <div class="alert alert-danger">
            @foreach( $errors->all() as $erros)
            <p>{{$erros}}</p>
            @endforeach
        </div>

       @endif


        <div class="tab-content">
            <div id="dadospessoaistab" class="tab-pane active">
                <div class="col-md4 col-sm-8 col-lg4 p-4">
                    <img height="60" width="50"src="/aluno_imagens/{{$aluno->imagem}}" alt="imagem nao encontrada" srcset="" class="img-responsive img-rounded">
                </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Nome do Candidato')}}</label>
                            <input name="nome_candidato" type="text" class="form-control" value="{{$aluno->nome_candidato}}">

                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Nome do Pai')}}</label>
                            <input name="nome_pai" type="text" class="form-control" value="{{$aluno->nome_pai}}">

                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Nome da Mãe')}} </label>
                            <input name="nome_mae" type="text" class="form-control" value="{{$aluno->nome_mae}}">

                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Naturalidade')}} </label>
                            <input name="naturalidade" type="text" class="form-control" value="{{$aluno->naturalidade}}">

                        </div>
                        <div class="col-md-6 p-4">
                            <label for="name">{{__('Número de BI')}} </label>
                            <input name="bi" type="text" class="form-control" value="{{$aluno->bi}}">

                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Data de Nascimento')}}</label>
                            <input name="data_nascimento" type="date" class="form-control" value="{{$aluno->data_nascimento}}">

                        </div>
                        <div class="col-md-6 p-4">
                            <label for="name">{{__('Bairro')}}</label>
                            <input name="bairro" type="text" class="form-control" value="{{$aluno->bairro}}">

                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Género')}}</label>
                            <select name="genero" id="" class="form-control">
                                <option value="{{$aluno->genero}}" selected="{{$aluno->genero}}"> {{$aluno->genero}}</option>
                                <option value="M" selected="">M</option>
                                <option value="F">F</option>

                            </select>


                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Estado Civil')}}</label>
                            <select name="estado_civil" id="" class="form-control">
                                <option value="{{$aluno->estado_civil}}" selected="{{$aluno->estado_civil}}">{{$aluno->estado_civil}}</option>
                                <option value="Casado">{{__('Casado')}}</option>
                                <option value="Divorciado">{{__('Divorciado')}}</option>
                                <option value="Viúvo">{{__('Viúvo')}}</option>
                                <option value="Namora">{{__('Namora')}}</option>
                                <option value="Noivo">{{__('Noivo')}}</option>
                                <option value="Separado">{{__('Separado')}}</option>
                                <option value="Marital">{{__('Marital')}}</option>

                            </select>


                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <label for="name">{{__('Contacto')}}</label>
                            <input name="contacto" type="number" class="form-control" value="{{$aluno->contacto}}">

                        </div>
                        <div class="col-md-6 p-4">
                            <label for="name">{{__('Fotografia')}}</label>
                            <input name="imagem" type="file" class="form-control"   value="{{$aluno->imagem}}" >

                        </div>

                    </div>
            </div>

            <div id="ocupacaotab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                        <label for="name">Nivel Academico</label>
                        <input name="nivel_academico" type="text" class="form-control" value="{{$aluno->nivel_academico}}">

                    </div>
                    <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                        <label for="name">Profissao</label>
                        <select name="profissao" id="" class="form-control">
                            <option value="{{$aluno->profissao}}" selected={{$aluno->profissao}}>{{$aluno->profissao}}</option>
                            <option value="Empregado">Empregado</option>
                            <option value="Desempregado">Desempregado</option>
                            <option value="Estudante">Estudante</option>
                            <option value="Outro">Outro</option>

                        </select>


                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="perfilcristaotab">
                <div class="row">

                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <label for="ano">{{__('Ano de Conversao')}}</label>
                           <input type="date" name="ano_conversao" class="form-control" value="{{$aluno->ano_conversao}}">

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="ano">{{__('Igreja de Proveniencia')}}</label>
                           <input type="text" name="igreja_proviniencia" class="form-control" value="{{$aluno->igreja_proviniencia}}">

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                        <label for="name">{{__('Escola Dominical?')}}</label>
                           <select name="escola_dominical" id="" class="form-control">
                               <option value="{{$aluno->escola_dominical}}">{{$aluno->escola_dominical}}</option>
                               <option value="Sim">Sim</option>
                               <option value="Nao">Nao</option>

                           </select>

                       </div>
                       <div class="col-md-4  col-sm-8 col-lg-4 p-4">
                        <label for="ano">{{__('Ano de Entrada')}}</label>

                           <input type="date" name="ano_entrada" class="form-control" value="{{$aluno->ano_entrada}}">

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="ano">Ultima Turma</label>
                           <input type="text" name="ultima_turma" class="form-control" value="{{$aluno->ultima_turma}}">


                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="ano">Professor</label>
                           <input type="text" name="professor" class="form-control" value="{{$aluno->professor}}">


                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                        <label for="Tipo_baptismo">Tipo de Baptismo</label>
                          <select name="tipo_baptismo" id="" class="form-control">
                              <option value="{{$aluno->tipo_baptismo}}">{{$aluno->tipo_baptismo}}</option>
                              <option value="Imersao">{{__('Imersão')}}</option>
                              <option value="Aspersao">{{__('Aspersão')}}</option>
                          </select>


                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                        <label for="date">Data do Baptismo</label>
                         <input class="form-control" type="date" name="data_baptismo" value="{{$aluno->data_baptismo}}">


                        </div>
                        <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="date">Quantas vezes Baptizou</label>
                           <input class="form-control" type="number" name="numero_baptismo" value="{{$aluno->numero_baptismo}}">


                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="text">{{__('Congregacao MEA que Pertence')}}</label>

                           <input class="form-control" type="text" name="congregacao_mea" value="{{$aluno->congregacao_mea}}">

                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4 ">
                            <label for="date">{{__('Lider da Pg')}}</label>
                           <input class="form-control" type="text" name="lider_pg" value="{{$aluno->lider_pg}}">


                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <label for="date">{{__('Contacto')}}</label>
                            <input class="form-control" type="number" name="contacto_lider" value="{{$aluno->contacto_lider}}">


                            </div>


                        <div class="col-md-12">
                            <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                         </div>

                </div>

         </div>
    </form>

 </div><!--fim do container-fluid-->
</div><!--fim do content-wrapper-->
@endsection
