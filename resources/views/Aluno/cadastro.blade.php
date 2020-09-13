@extends('layouts.master')
@section('title')
MEA
@stop
@section('links')

   <link rel="shortcut icon" href="{{asset('image/logomeapng.png')}}" type="image/png">
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
                                <label for="name">{{__('Nome do Candidato')}}</label>
                                 <input  autocomplete="off" type="text" name="nome_candidato" placeholder="Nome Completo"  autofocus class="form-control" value="{{old('nome_candidato')}}">

                             </div>
                             <div class="col-md-6 p-4">
                                <label for="name">{{__('Nome do Pai')}}</label>
                                 <input autocomplete="off" type="text" name="nome_pai" placeholder="Nome do Pai" class="form-control" value="{{old('nome_pai')}}">

                             </div>
                             <div class="col-md-6 p-4">
                                     <label for="name">{{__('Nome da Mae')}}</label>
                                    <input autocomplete="off" type="text" name="nome_mae" placeholder="Nome da Mãe" class="form-control" value="{{old('nome_mae')}}">

                            </div>
                            <div class="col-md-6 p-4">
                                <label for="name">{{__('Naturalidade')}}</label>
                                  <input autocomplete="off" type="text" name="naturalidade" placeholder="Naturalidade" class="form-control" value="{{old('naturalidade')}}">

                             </div>
                             <div class="col-md-6 p-4">
                                <label for="number">{{__('BI nº')}}</label>
                                <input autocomplete="off" type="text" name="bi" placeholder="Número de BI " class="form-control"  value="{{old('bi')}}">

                              </div>

                               <div class="col-md-6 p-4">
                                    <label for="date">{{__('Data de Nascimento')}}</label>
                                    <input type="date" name="data_nascimento" placeholder="" class="form-control">

                                </div>
                                <div class="col-md-6 p-4">
                                    <label for="name">{{__('Bairro')}}</label>
                                    <input type="text" name="bairro" placeholder="Bairro" class="form-control" value="{{old('bairro')}}" >

                                 </div>

                                  <div class="col-md-6 p-4">
                                         <label for="name">{{__('Género')}}</label>
                                         <select name="genero" class="form-control" >

                                            <option value="M" >M</option>
                                            <option value="F" >F</option>
                                        </select>


                                     </div>
                                     <div class="col-md-6 p-4">
                                        <label for="name">{{__('Estado Civil')}}</label>
                                         <select name="estado_civil" class="form-control"  value="{{old('estado_civil')}}">
                                                 <option value="Casado">Casado</option>
                                                 <option value="Divorciado">Divorciado</option>
                                                 <option value="Viúvo">Viúvo</option>
                                                 <option value="Namora">Namora</option>
                                                 <option value="Noivo">Noivo</option>
                                                 <option value="Separado">Separado</option>
                                                 <option value="Marital">Marital</option>
                                            </select>

                                         </div>


                                         <div class="col-md-6 p-4">
                                            <label for="">{{__('Contacto')}}</label>
                                            <input name="contacto" type="number" min="0" placeholder="841234567" class="form-control" value="{{old('contacto')}}">

                                         </div>

                                         <div class="col-md-6 p-4">
                                                <label for="file">{{__('Fotografia')}}</label>
                                                <input name="imagem" type="file" class="form-control" name="fotografia" value="{{old('imagem')}}">

                                         </div>

                                         <div class="col-md-12 p-4">
                                            <a  id="proximo" class=" btn btn-outline-primary continue" style="margin-left:91%;" > Seguinte</a>
                                         </div>

                        </div>
                </div>
                <div id="ocupacaotab" class="tab-pane fade">
                    <div class="row">
                        <div class="col-md-6 p-4">
                            <label for="">Nivel Acadêmico</label>
                         <input name="nivel_academico" type="Name" placeholder="Nivel académico" class="form-control" value="{{old('nivel_academico')}}">

                         </div>
                         <div class="col-md-6 p-4">
                            <label for="name">Profissão/Ocupação</label>
                             <select name="profissao" id="" class="form-control" value="{{old('profissao')}}">
                                <option value="Empregado">Empregado</option>
                                <option value="Desempregado">Desempregado</option>
                                <option value="Estudante">Estudante</option>
                                <option value="Outro">Outro</option>

                             </select>

                              </div>
                              <div class="pl-3"  >
                                    <a id="antigo"  class=" btn btn-outline-primary pr-3 back" >Voltar</a>
                                    <a  id="proximo1" class=" btn btn-outline-primary pr-3 continue" > Seguinte</a>
                                </div>

                     </div>

                </div>
                <div id="perfilcristaotab" class="tab-pane fade">
                    <div class="row">

                             <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                <label for="name">{{__('Selecione uma Escola')}}</label>
                                <select name="escola" id="" class="form-control" disabled>
                                    @foreach($escolas as $escola)
                                <option value="{{$escola->id}}">{{$escola->nome_escola}}</option>
                                @endforeach
                                </select>


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="number">{{__('Turma')}}</label>
                                    <select  name="turma_id" class="custum-select form-control">
                                        @foreach($turmas as $turma)
                                    <option value="{{$turma->id}}">{{$turma->nome_turma}}</option>
                                    @endforeach
                                    </select>


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="ano">{{__('Ano de Conversao')}}</label>
                                    <input type="date" name="ano_conversao" class="form-control">

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="ano">{{__('Igreja de Proveniencia')}}</label>
                                    <input type="text" name="igreja_proviniencia" placeholder="Última Igreja" class="form-control" autocomplete="off">

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="name">{{__('Escola Dominical?')}}</label>
                                    <select name="escola_dominical" id="" class="form-control">
                                        <option value="Sim">Sim</option>
                                        <option value="Nao">Nao</option>

                                    </select>

                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="ano">{{__('Ano de Entrada')}}</label>
                                    <input type="number" placeholder="YYYY" name="ano_entrada"  class="form-control">


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="ano">Ultima Turma</label>
                                    <input type="text" name="ultima_turma" placeholder="Ultima Turma" class="form-control" autocomplete="off">


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="ano">Professor</label>
                                    <input type="text" name="professor" placeholder="Professor" class="form-control" autocomplete="off">


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="Tipo_baptismo">Tipo de Baptismo</label>
                                   <select name="tipo_baptismo" id="" class="form-control">
                                       <option value="Imersao">{{__('Imersão')}}</option>
                                       <option value="Aspersao">{{__('Aspersão')}}</option>
                                   </select>


                                </div>
                                <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="date">Data do Baptismo</label>
                                  <input class="form-control" type="date"  name="data_baptismo">


                                 </div>
                                 <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="date">Quantas vezes Baptizou</label>
                                    <input class="form-control" type="number" placeholder="Vezes que Baptizou" name="numero_baptismo" min="0">


                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="text">Congregacao MEA que Pertence</label>

                                    <input class="form-control" type="text" placeholder="Igreja Mea" name="congregacao_mea" autocomplete="off">

                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4 ">
                                    <label for="date">Lider da Pg</label>
                                    <input class="form-control"  placeholder="Lider da PG" type="text" name="lider_pg" autocomplete="off">


                                   </div>
                                   <div class="col-md-4 col-sm-8 col-lg-4 p-4">
                                    <label for="date">Contacto</label>
                                    <input class="form-control" type="number" placeholder="84/82/85/86" name="contacto_lider" autocomplete="off">


                                   </div>

                                <div class="col-md-12">
                                    <div class="pl-2">
                                        <button type="submit" class="btn btn-outline-primary">Gravar</button>
                                    </div>

                                </div>

                    </div>

                </div>

            </div>

</form>
@section('scripts')
<!--Importando os ficheiros jquery-->
 <script src=" {{ asset('js/jquery/jquery.js')}}">
 </script>


<!--usando o js na pagina-->
 <script>
     $(document).ready(function(){
        $("#proximo").click(function(){
           $(".nav-tabs li:nth-child(2) a").tab('show');
           $(".nav-tabs li:first-child(1) a").hide();


        })
        $("#proximo1").click(function(){
           $(".nav-tabs li:nth-child(3) a").tab('show');
           $(".nav-tabs li:first-child(2) a").hide();

        })
        $("#antigo").click(function(){
            $(".nav-tabs li:nth-child(1) a").tab('show')
            $(".nav-tabs li:first-child(2) a").hide()

        })
     })
 </script>
@stop

@endsection
