<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('grades', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer("grade_semestre")->unsigned();
          $table->text("grade_curso");
          $table->text("grade_disciplina");
          $table->text("grade_dia");
          $table->text("grade_turnos");
          $table->text("grade_campus");
          $table->text("grade_bloco");
          $table->text("grade_sala");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grades');
    }
}
