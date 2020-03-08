@extends('layouts.sidenavbar')
@section('title')
    Cadastro de Pofessores
@stop
@section('scripts')
<script scr="{{ asset ('js/custum.js')}}">

</script>
@stop


@section('conteudo')
    <div class="container">
        <form action="{{route('professorcadastro.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        @if(session('error'))
        <div class="alert alert-success">
          {{session('error')}}
        </div>
        @endif
        @if(isset($errors)&& count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $erro)
                <p>{{$erro}}</p>
                @endforeach
          @endif
            </div>

            <div class="form-group col-xs-12">
                <ul class="nav nav-tabs nav-justified p-3">
                    <li class="active">
                        <a href="#dadospessoaistab" data-toggle="tab" class="active p-3">Dados Pessoais</a>
                        <a href="#perfilCristaotab" data-toggle="tab" class="p-3">Perfil Cristão</a>
                        <a href="#historicotab" data-toggle="tab" class="p-3">Histórico</a>

                    </li>


                </ul>
                <div class="tab-content">
                    <div id="dadospessoaistab" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-6 p-4">
                                <input type="text" name="nome_professor" class="form-control"{{ old('nome')}} autocomplete="off">
                                <label  for="name">Nome do Professor</label>
                            </div>
                            <div class="col-md-6 p-4">
                                <input type="date" name="data_nascimento" class="form-control"{{old('data_nascimento')}} autocomplete="off">
                                <label  for="date">Data de Nascimento</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <select name="genero" id="" class="form-control">
                                <option value="M">M</option>
                                <option value="F">F</option>
                                </select>
                                <label for="genero">Género</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <select name="estado_civil" id="" class="form-control">
                                <option value="Solteiro">Solteiro</option>
                                <option value="Casado">Casado</option>
                                <option value="Viúvo">Viúvo</option>
                                <option value="Namora">Namora</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Marital">Marital</option>
                                </select>
                                <label for="genero">Estado Civil</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="number" name="contacto" class="form-control"{{ old('contacto')}} autocomplete="off">
                                <label  for="date">Contacto</label>
                            </div>

                            <div class="col-md-6 p-3">
                                <select name="categoria" id="" class="form-control">
                                <option value="professor_principal">Professor Principal</option>
                                <option value="professor_assistente">Professor Assistente</option>
                                </select>
                                <label for="ctegoria">Categoria</label>
                            </div>

                            <div class="col-md-6 p-3">
                                <input type="text" name="bi" class="form-control"{{ old('bi')}} autocomplete="off">
                                <label  for="date">BI  nº</label>
                            </div>

                            <div class="col-md-6 p-3">
                                <input type="text" name="naturalidade" class="form-control"{{ old('naturalidade')}} autocomplete="off">
                                <label  for="date">Naturalidade</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="file" name="fotografia" class="form-control"{{old('fotografia')}} autocomplete="off">
                                <label for="name">Selecione uma Fotografia</label>

                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="bairro" class="form-control"{{old('bairro')}} autocomplete="off">
                                <label  for="date">Bairro</label>
                            </div>

                            <div class="col-md-6 p-3">
                                <input type="text" name="nivel_academico" class="form-control"{{old('nivel_academico')}} autocomplete="off">
                                <label  for="date">Nivel Academico</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="profissao" class="form-control"{{old('profissao')}}>
                                <label  for="date">Profissão</label>
                            </div>
                            <div class="col-md-12">
                            <div class="pl-1"  >
                                    <a id="antigo"  class=" btn btn-primary pr-3 back" >Voltar</a>
                                    <a  id="proximo1" class=" btn btn-primary pr-3 continue" > Seguinte</a>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div id="perfilCristaotab" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <input type="number" min="0" name="ano_conversao" class="form-control"{{old('ano_conversao')}}>
                                <label for="ano">Ano de Conversao</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="number" min="0" name="nr_candidato" class="form-control"{{old('nr_candidato')}}>
                                <label for="ano">Numero de Candidato</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="curso_caped" class="form-control"{{old('curso')}}>
                                <label for="ano">Curso CAPED</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="congregacao" class="form-control"{{old('congregacao')}}>
                                <label for="congregacao">Congregação</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="text" name="nome_lider" class="form-control"{{old('nome_lider')}}>
                                <label for="ano">Nome do Lider</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="number" name="contacto_lider" class="form-control"{{old('contacto_lider')}}>
                                <label for="ano">Contacto do Lider</label>
                            </div>
                            <div class="col-md-12">
                            <div class="pl-3"  >
                                    <a id="antigo"  class=" btn btn-primary pr-3 back" >Voltar</a>
                                    <a  id="proximo1" class=" btn btn-primary pr-3 continue" > Seguinte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="historicotab" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6 p-3">
                                <input type="name" name="nome_relator" class="form-control">
                                <label for="">Nome do Relator</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="number" name="numero_cartao_dizimista" class="form-control">
                                <label for="">Numero do Cartao de Dizimista</label>
                            </div>
                            <div class="col-md-6 p-3">
                                <input type="number" name="ano_lencionamento" class="form-control">
                                <label for="">Ano de Lencionamento</label>
                            </div>
                            <div class="col-md-12">
                            <div class="pl-3"  >
                                    <a id="antigo"  class=" btn btn-primary pr-3 back" >Voltar</a>
                                    <button class="btn btn-primary" type="submit">Gravar</button>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>



        </form>


    </div>

@endsection
