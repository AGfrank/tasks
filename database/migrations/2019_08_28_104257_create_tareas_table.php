<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarea', function (Blueprint $table) {
            $table->char('_id', 255)->primary();
            $table->char('fecha', 255);
            $table->char('nombre', 255);
            $table->char('direccion', 255);
            $table->double('latitud', 19, 0);
            $table->double('longitud', 19, 0);
            $table->integer('mercancia');
            $table->char('estado', 255);
            $table->char('distribuidor', 255)->index();

            $table->foreign('distribuidor')->references('_id')->on('Distribuidor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tarea');
    }
}
