<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();

        Schema::create('turma_professor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('turma_id')->unsigned();
            $table->foreign('turma_id')
                ->references('id')
                ->on('turmas')
                ->onDelete('cascade');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')
                  ->references('id')
                  ->on('professors')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_professor');
    }
}
