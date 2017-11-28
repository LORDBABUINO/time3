<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
  protected $fillable = [
    'grade_semestre',
    'grade_curso',
    'grade_disciplina',
    'grade_dia',
    'grade_turnos',
    'grade_campus',
    'grade_bloco',
    'grade_sala'
  ];
  protected $table='grades';
}
