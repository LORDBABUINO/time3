<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroGradeController extends Controller
{
  const WEEK = [
    'Segunda' => 'segunda',
    'Terça' => 'terca',
    'Quarta' => 'quarta',
    'Quinta' => 'quinta',
    'Sexta' => 'sexta',
    'Sábado' => 'sabado'
  ];
  const TURNS = [
    'Matutino' => 'matutino',
    'Noturno' => 'noturno',
  ];

  public function index()
  {
      return view(
        'grade/cadastro',
        ['WEEK' => self::WEEK, 'TURNS' => self::TURNS]
      );
  }
}
