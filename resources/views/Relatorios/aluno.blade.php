<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="app.css">
  <title>Relatorio aluno</title>
</head>

<style>
.tabela{
    display: table;
}
.linha{
    display: table-row;
}
.coluna{
    display: table-cell;
    padding-bottom: 2px;
}
#Titulo{
    text-align: center;
    color: red;
}

.floating{
    border: none;
    font-size:12px;
    border-bottom: 1px solid lightblue;
    background-color:transparent;
    height: 10px;
    position: relative;
    display: block;
    width: 210%;
    font-family:  "Nunito", sans-serif;
}
label{
    color: red;

}

</style>
<body>


<h3 id="Titulo"> Ministerio Envagelho em Acção</h3>
<p id="Titulo">Formulario de Cadastro de Candidatos Ao Baptismo</p>
<hr style="color:yellow;"></hr>
<h4 style="text-align: center;">Dados Pessoais</h4>
<div class="imagem">
    <!--img height="50" src="/imagens/{{$aluno->imagem}}" alt=""-->
</div>

    <div class="tabela">

        <div class="linha">
            <div class="coluna">
                <label for="name">Número do Candidato</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Nome do Candidato</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->id}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->nome_candidato}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Nome da mãe</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Nome do Pai</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->nome_mae}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->nome_pai}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">
                    BI nº</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Data de Nascimento</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->bi}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->data_nascimento}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">
                    Bairro</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Género</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->bairro}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->genero}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">
                    Estado Civil</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Contacto</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->estado_civil}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->contacto}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Nível Acadêmico</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Ocupação</label>
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->nivel_academico}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->profissao}}">
            </div>

        </div>


    </div>
    <h4  style="text-align: center;">Perfil Cristão </h4>
    <div class="tabela">
        <div class="linha">
            <div class="coluna">
                <label for="name">Turma</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Ano de Conversão</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->ano_conversao}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Igreja de Proviniência</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Escola Dominical</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->igreja_proviniencia}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->escola_dominical}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Ano de Entrada</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name">Última Turma</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->ano_entrada}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->ultima_turma}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Professor</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name"> Tipo de Baptismo</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->professor}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->tipo_baptismo}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Data de Baptismo</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name"> Numero de Baptismo</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->data_baptismo}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->numero_baptismo}}">
            </div>

        </div>
        <div class="linha">
            <div class="coluna">
                <label for="name">Congregacao MEa</label>
            </div>
            <div class="coluna" style="padding-left:250px;">
                <label for="name"> Lider da PG</label>
            </div>
        </div>
        <div class="linha">
            <div class="coluna">
                <input type="text" class="floating" value="{{$aluno->congregacao_mea}}">
            </div>
            <div class="coluna" style="padding-left:250px;">
               <input type="text" class="floating" value="{{$aluno->lider_pg}}">
            </div>

        </div>
    </div>


</body>
</html>






