<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('ciudad');
            $table->string('direccion');
            $table->integer('aforo');
            $table->string('tipo');
            $table->integer('participantes');
            $table->string('imagen');
            $table->float('precio');

            $table->unsignedBigInteger('inscripcion_id');
            $table->foreign('inscripcion_id')->references('id')->on('inscripcions');

            $table->unsignedBigInteger('categoria_evento_id');
            $table->foreign('categoria_evento_id')->references('id')->on('categoria_eventos');

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
        Schema::dropIfExists('eventos');
    }
};
