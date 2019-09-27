<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('ClockSpeed');
            $table->double('TurboClockSpeed');
            $table->bigInteger('Cores');
            $table->string('Socket');
            $table->string('Marca');
            $table->string('Foto');
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
        Schema::drop('cpus');
    }
}
