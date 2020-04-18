<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_professor');
            $table->date('data_nascimento');
            $table->enum('genero',['M','F']);
            $table->enum('estado_civil',['Divorciado','Separado','Casado','viuvo','namora','Noivo','Marital']);
            $table->integer('contacto');
            $table->enum('categoria',['professor_principal','professor_assistente']);
            $table->string('bi')->unique();
            $table->string('naturalidade');
            $table->string('fotografia');
            $table->string('bairro');
            $table->string('nivel_academico');
            $table->string('profissao');
            $table->year('ano_conversao');
            $table->integer('nr_candidato');
            $table->string('curso_caped');
            $table->string('congregacao');
            $table->string('nome_lider');
            $table->integer('contacto_lider');
            $table->string('nome_relator');
            $table->integer('numero_cartao_dizimista');
            $table->year('ano_lencionamento')->nullable();
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
        Schema::dropIfExists('professors');
    }
}
