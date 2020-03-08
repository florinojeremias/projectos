<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   // Schema::enableForeignKeyConstraints();

        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_area');
            $table->string('relator_principal')->unique();
            $table->string('relator_adjunto');
            $table->timestamps();
        });
    }
       // Schema::enableForeignKeyConstraints();
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
