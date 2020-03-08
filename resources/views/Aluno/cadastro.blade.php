@extends('layouts.sidenavbar')
@section('title')
Cadastro de Alunos
@stop
@section('scripts')
    <script src="{{ asset('js/requisicoes.js') }}">
    </script>

   <link rel="stylesheet" href="{{ asset('css/input.css')}}">
@stop
@section('conteudo')

<form class="form" name="formaluno" action="{{ route('alunocadastro.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-xs-12">

                <h3 style="color:red" class="text-center p-2">Cadastro de Candidatos o Baptismo</h3>


            <ul class="nav nav-tabs nav-justified  p-3">
                <li class="active">
                    <a href="#dadospessoaistab" data-toggle="tab" class="p-3">
                    Dados Pessoais
                    </a>
                </li>
                <li id="tab1" >
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
          @if(session('error'))
          <div class="alert alert-primary">
            {{session('error')}}
          </div>
          @endif

            <div class="tab-content">
                <div id="dadospessoaistab" class="tab-pane  active">
                        <div class="row">

                            <div class="col-md-6 p-4">
                                 <input  autocomplete="off" type="text" name="nome_candidato"  autofocus class="form-control" value="{{old('nome_candidato')}}">
                                 <label for="name">{{__('Nome do Candidato')}}</label>
                             </div>
                             <div class="col-md-6 p-4">
                                 <input autocomplete="off" type="text" name="nome_pai" placeholder="" class="form-control" value="{{old('nome_pai')}}">
                                 <label for="name">{{__('Nome do Pai')}}</label>
                             </div>
                             <div class="col-md-6 p-4">
                                    <input autocomplete="off" type="text" name="nome_mae" placeholder="" class="form-control" value="{{old('nome_mae')}}">
                                    <label for="name">{{__('Nome da Mae')}}</label>
                            </div>
                            <div class="col-md-6 p-4">
                                  <input autocomplete="off" type="text" name="naturalidade" placeholder="" class="form-control" value="{{old('naturalidade')}}">
                                  <label for="name">{{__('Naturalidade')}}</label>
                             </div>
                             <div class="col-md-6 p-4">
                                <input autocomplete="off" type="text" name="bi" placeholder class="form-control"  value="{{old('bi')}}">
                                 <label for="number">{{__('BI nº')}}</label>
                              </div>

                               <div class="col-md-6 p-4">
                                    <input type="date" name="data_nascimento" placeholder="" class="form-control">
                                     <label for="date">{{__('Data de Nascimento')}}</label>
                                </div>
                                <div class="col-md-6 p-4">
                                    <input type="text" name="bairro" placeholder="" class="form-control" value="{{old('bairro')}}" >
                                     <label for="name">{{__('Bairro')}}</label>
                                 </div>

                                  <div class="col-md-6 p-4">

                                         <select name="genero" class="form-control" >

                                            <option value="M" >M</option>
                                            <option value="F" >F</option>
                                        </select>
                                        <label for="name">{{__('Genero')}}</label>

                                     </div>
                                     <div class="col-md-6 p-4">
                                         <select name="estado_civil" class="form-control"  value="{{old('estado_civil')}}">
                                                 <option value="Casado">Casado</option>
                                                 <option value="Divorciado">Divorciado</option>
                                                 <option value="Viúvo">Viúvo</option>
                                                 <option value="Namora">Namora</option>
                                                 <option value="Noivo">Noivo</option>
                                                 <option value="Separado">Separado</option>
                                                 <option value="Marital">Marital</option>
                                            </select>
                                            <label for="name">{{__('Estado Civil')}}</label>
                                         </div>


                                         <div class="col-md-6 p-4">
                                            <input name="contacto" type="number" min="0" placeholder="" class="form-control" value="{{old('contacto')}}">
                                            <label for="">{{__('Contacto')}}</label>
                                         </div>

                                         <div class="col-md-6 p-4">
                                                <input name="imagem" type="file" class="form-control" name="fotografia" value="{{old('imagem')}}">
                                                <label for="file">{{__('Fotografia')}}</label>
                                         </div>

                                         <div class="col-md-12 p-4">
                                            <a  id="proximo" class=" btn btn-primary continue" style="margin-left:91%;" > Seguinte</a>
                                         </div>

                        </div>
                </div>
                <div id="ocupacaotab" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 p-4">

                         <input name="nivel_academico" type="Name" placeholder="" class="form-control" value="{{old('nivel_academico')}}">
                         <label for="">Nivel Acadêmico</label>
                         </div>
                         <div class="col-md-6 p-4">
                             <select name="profissao" id="" class="form-control" value="{{old('profissao')}}">
                                <option value="Empregado">Empregado</option>
                                <option value="Desempregado">Desempregado</option>
                                <option value="Estudante">Estudante</option>
                                <option value="Outro">Outro</option>

                             </select>
                             <label for="name">Profissão/Ocupação</label>
                              </div>
                              <div class="pl-3"  >
                                    <a id="antigo"  class=" btn btn-primary pr-3 back" >Voltar</a>
                                    <a  id="proximo1" class=" btn btn-primary pr-3 continue" > Seguinte</a>
                                </div>

                     </div>

                </div>
                <div id="perfilcristaotab" class="tab-pane fade">
                    <div class="row">
                             <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                <select name="escola" id="" class="form-control" disabled>
                                    @foreach($escolas as $escola)
                                <option value="{{$escola->id}}">{{$escola->nome_escola}}</option>
                                @endforeach
                                </select>

                                <label for="name">{{__('Selecione uma Escola')}}</label>
                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <select  name="turma_id" class="custum-select form-control">
                                        @foreach($turmas as $turma)
                                    <option value="{{$turma->id}}">{{$turma->nome_turma}}</option>
                                    @endforeach
                                    </select>
                                    <label for="number">{{__('Turma')}}</label>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input type="date" name="ano_conversao" class="form-control">
                                    <label for="ano">{{__('Ano de Conversao')}}</label>
                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input type="text" name="igreja_proviniencia" class="form-control">
                                    <label for="ano">{{__('Igreja de Proveniencia')}}</label>
                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <select name="escola_dominical" id="" class="form-control">
                                        <option value="Sim">Sim</option>
                                        <option value="Nao">Nao</option>

                                    </select>
                                    <label for="name">{{__('Escola Dominical?')}}</label>
                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input type="date" name="ano_entrada" class="form-control">
                                    <label for="ano">{{__('Ano de Entrada')}}</label>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input type="text" name="ultima_turma" class="form-control">
                                    <label for="ano">Ultima Turma</label>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input type="text" name="professor" class="form-control">
                                    <label for="ano">Professor</label>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                   <select name="tipo_baptismo" id="" class="form-control">
                                       <option value="Imersao">{{__('Imersão')}}</option>
                                       <option value="Aspersao">{{__('Aspersão')}}</option>
                                   </select>
                                   <label for="Tipo_baptismo">Tipo de Baptismo</label>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                  <input class="form-control" type="date" name="data_baptismo">
                                    <label for="date">Data do Baptismo</label>

                                 </div>
                                 <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input class="form-control" type="number" name="numero_baptismo" min="0">
                                      <label for="date">Quantas vezes Baptizou</label>

                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input class="form-control" type="text" name="congregacao_mea">
                                      <label for="text">Congregacao MEA que Pertence</label>

                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4 ">
                                    <input class="form-control" type="text" name="lider_pg">
                                      <label for="date">Lider da Pg</label>

                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <input class="form-control" type="number" name="contacto_lider">
                                      <label for="date">Contacto</label>

                                   </div>

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Gravar</button>
                                </div>

                    </div>

                </div>

            </div>

</form>


@endsection
