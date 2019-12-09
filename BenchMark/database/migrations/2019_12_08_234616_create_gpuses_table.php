<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGpusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('gpuID');
            $table->string('arquitectura');
            $table->string('frecuencia');
            $table->string('memoria_de_video');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gpuses');
    }
}
