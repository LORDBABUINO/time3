<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String("nome");
            $table->String("descricao");
            $table->Integer("salas_fk_blocos");
            $table->Integer("salas_fk_campuss");
            $table->foreign('salas_fk_blocos')->references('id')->on('blocos');
            $table->foreign('salas_fk_campuss')->references('id')->on('campuss');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
