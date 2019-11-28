<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribuidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Distribuidor', function (Blueprint $table) {
            $table->char('_id', 255)->primary();
            $table->char('login', 255);
            $table->char('email', 255)->unique();
            $table->char('password', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Distribuidor');
    }
}
