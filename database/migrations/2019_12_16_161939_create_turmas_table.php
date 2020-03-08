<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('turmas', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome_turma');
            $table->string('codigo_turma');
            $table->string('professor_principal');
            $table->string('professor_adjunto');
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
        Schema::dropIfExists('turmas');
    }
}
