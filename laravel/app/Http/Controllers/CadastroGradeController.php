<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\GradeRequest;
use App\Http\Controllers\Controller;

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

  /**
  * @return Response
  */
  public function index()
  {
      return view(
        'grade/cadastro',
        ['WEEK' => self::WEEK, 'TURNS' => self::TURNS]
      );
  }

  /**
  * @param Request $request
  * @return Response
  */
  public function store(GradeRequest $request)
  {
    $validatedData = $request->validate($request, [
      'semestre' => 'required|max:2',
      'curso' => 'required',
      'disciplina' => 'required',
      'grade' => 'required',
      'turnos' => 'required',
      'campus' => 'required',
      'bloco' => 'required',
      'sala' => 'required'
    ]);
  }
}
