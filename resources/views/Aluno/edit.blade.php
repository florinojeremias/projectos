@extends('layouts.sidenavbar')
@section('title')
Editar Dados dos Alunos
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
    <form action="{{ route('alunocadastro.update',$aluno->id)}}" method="POST" class="form">
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


        <div class="tab-content">
            <div id="dadospessoaistab" class="tab-pane active">
                <div class="col-md4 col-sm-8 col-lg4 p-4">
                    <img height="60" width="50"src="/aluno_imagens/{{$aluno->imagem}}" alt="imagem nao encontrada" srcset="" class="img-responsive">
                </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="nome_candidato" type="text" class="form-control" value="{{$aluno->nome_candidato}}">
                            <label for="name">{{__('Nome do Candidato')}}</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="nome_pai" type="text" class="form-control" value="{{$aluno->nome_pai}}">
                            <label for="name">{{__('Nome do Pai')}}</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="nome_mae" type="text" class="form-control" value="{{$aluno->nome_mae}}">
                            <label for="name">{{__('Nome da Mãe')}} </label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="naturalidade" type="text" class="form-control" value="{{$aluno->naturalidade}}">
                            <label for="name">{{__('Naturalidade')}} </label>
                        </div>
                        <div class="col-md-6 p-4">
                            <input name="bi" type="text" class="form-control" value="{{$aluno->bi}}">
                            <label for="name">{{__('Número de BI')}} </label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="data_nascimento" type="date" class="form-control" value="{{$aluno->data_nascimento}}">
                            <label for="name">{{__('Data de Nascimento')}}</label>
                        </div>
                        <div class="col-md-6 p-4">
                            <input name="bairro" type="text" class="form-control" value="{{$aluno->bairro}}">
                            <label for="name">{{__('Bairro')}}</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <select name="genero" id="" class="form-control">
                                <option value="{{$aluno->genero}}" selected="{{$aluno->genero}}"> {{$aluno->genero}}</option>
                                <option value="M" selected="">M</option>
                                <option value="F">F</option>

                            </select>

                        <label for="name">{{__('Género')}}</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
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

                            <label for="name">{{__('Estado Civil')}}</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                            <input name="contacto" type="number" class="form-control" value="{{$aluno->contacto}}">
                            <label for="name">{{__('Contacto')}}</label>
                        </div>
                        <div class="col-md-6 p-4">
                            <input name="imagem" type="file" class="form-control" value="{{$aluno->imagem}}">
                            <label for="name">{{__('Fotografia')}}</label>
                        </div>

                    </div>
            </div>

            <div id="ocupacaotab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                        <input name="nivel_academico" type="text" class="form-control" value="{{$aluno->nivel_academico}}">
                        <label for="name">Nivel Academico</label>
                    </div>
                    <div class="col-md-6 col-sm-8 col-lg-6 p-4">
                        <select name="profissao" id="" class="form-control">
                            <option value="{{$aluno->profissao}}" selected={{$aluno->profissao}}>{{$aluno->profissao}}</option>
                            <option value="Empregado">Empregado</option>
                            <option value="Desempregado">Desempregado</option>
                            <option value="Estudante">Estudante</option>
                            <option value="Outro">Outro</option>

                        </select>

                        <label for="name">Profissao</label>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="perfilcristaotab">
                <div class="row">

                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input type="date" name="ano_conversao" class="form-control" value="{{$aluno->ano_conversao}}">
                           <label for="ano">{{__('Ano de Conversao')}}</label>
                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input type="text" name="igreja_proviniencia" class="form-control" value="{{$aluno->igreja_proviniencia}}">
                           <label for="ano">{{__('Igreja de Proveniencia')}}</label>
                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <select name="escola_dominical" id="" class="form-control">
                               <option value="{{$aluno->escola_dominical}}">{{$aluno->escola_dominical}}</option>
                               <option value="Sim">Sim</option>
                               <option value="Nao">Nao</option>

                           </select>
                           <label for="name">{{__('Escola Dominical?')}}</label>
                       </div>
                       <div class="col-md-4  col-sm-8 col-lg-4 p-4">
                           <input type="date" name="ano_entrada" class="form-control" value="{{$aluno->ano_entrada}}">
                           <label for="ano">{{__('Ano de Entrada')}}</label>

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input type="text" name="ultima_turma" class="form-control" value="{{$aluno->ultima_turma}}">
                           <label for="ano">Ultima Turma</label>

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input type="text" name="professor" class="form-control" value="{{$aluno->professor}}">
                           <label for="ano">Professor</label>

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                          <select name="tipo_baptismo" id="" class="form-control">
                              <option value="{{$aluno->tipo_baptismo}}">{{$aluno->tipo_baptismo}}</option>
                              <option value="Imersao">{{__('Imersão')}}</option>
                              <option value="Aspersao">{{__('Aspersão')}}</option>
                          </select>
                          <label for="Tipo_baptismo">Tipo de Baptismo</label>

                       </div>
                       <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                         <input class="form-control" type="date" name="data_baptismo" value="{{$aluno->data_baptismo}}">
                           <label for="date">Data do Baptismo</label>

                        </div>
                        <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input class="form-control" type="number" name="numero_baptismo" value="{{$aluno->numero_baptismo}}">
                             <label for="date">Quantas vezes Baptizou</label>

                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                           <input class="form-control" type="text" name="congregacao_mea" value="{{$aluno->congregacao_mea}}">
                             <label for="text">{{__('Congregacao MEA que Pertence')}}</label>

                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4 ">
                           <input class="form-control" type="text" name="lider_pg" value="{{$aluno->lider_pg}}">
                             <label for="date">{{__('Lider da Pg')}}</label>

                          </div>
                          <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                            <input class="form-control" type="number" name="contacto_lider" value="{{$aluno->contacto_lider}}">
                             <label for="date">{{__('Contacto')}}</label>

                            </div>


                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                         </div>

                </div>

         </div>
    </form>
 </div><!--fim do container-fluid-->
</div><!--fim do content-wrapper-->
@endsection
