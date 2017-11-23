<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCampuss extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('campuss', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String("campus_nome");
            $table->String("campus_logradouro");
            $table->String("campus_complemento");
            $table->String("campus_cidade");
            $table->String("campus_uf");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campuss');
    
    }
}
