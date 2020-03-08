<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')
                  ->references('id')
                  ->on('turmas')
                  ->onDelete('cascade');
            $table->string('nome_candidato');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('naturalidade');
            $table->string('bi',20)->unique();
            $table->string('imagem',200);
            $table->string('bairro');
            $table->date('data_nascimento');
            $table->enum('estado_civil',['Divorciado','Separado','Casado','Viuvo','Namora','Noivo','Marital']);
            $table->string('nivel_academico');
            $table->enum('profissao',['Estudante','Empregado','Outro','Desempregado']);
            $table->string('contacto');
            $table->enum('genero',['M','F']);
            $table->integer('ano_conversao')->nullable();
            $table->string('igreja_proviniencia')->nullable();
            $table->enum('escola_dominical',['Sim','Nao'])->nullable();
            $table->integer('ano_entrada')->nullable();
            $table->string('ultima_turma')->nullable();
            $table->string('professor')->nullable();
            $table->enum('tipo_baptismo',['aspercao','imersao'])->nullable();
            $table->date('data_baptismo')->nullable();
            $table->integer('numero_baptismo')->nullable();
            $table->string('congregacao_mea')->nullable();
            $table->string('lider_pg')->nullable();
            $table->integer('contacto_lider')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
