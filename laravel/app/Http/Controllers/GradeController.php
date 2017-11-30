<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Grade;
use App\Http\Requests\GradeRequest;

class GradeController extends Controller{

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

public function __contruct(){

	$this->middleware('auth');
}

public function listar(){

	return view('grade/listar', ['grades'=>Grade::all()]);
}

public function criar(){

	$campus = collect(['' => 'Selecione um Campus'])->merge(
		DB::table('campuss')->pluck('campus_nome', 'id')
	);
	$bloco = collect(['' => 'Selecione um Bloco'])->merge(
		DB::table('blocos')->pluck('nome', 'id')
	);
	$sala = collect(['' => 'Selecione uma Sala'])->merge(
		DB::table('salas')->pluck('nome', 'id')
	);

	return view('grade/criar',
	[
		'WEEK' => self::WEEK,
		'TURNS' => self::TURNS,
		'grade' => new Grade,
		'campus' => $campus,
		'bloco' => $bloco,
		'sala' => $sala
	]);
}

public function editar($id){

	return view('grade/editar', ['grade'=>Grade::find($id)]);
}

public function remover($id){

  $grade = Grade::find($id);
  $grade -> delete();

  return redirect ('grade/listar');
}

public function salvar(GradeRequest $request){

	$grade = new Grade();
	if ($request->id) {
		$grade=Grade::find($request->id);
	}

	$grade->grade_semestre = $request->semestre;
	$grade->grade_curso = $request->curso;
	$grade->grade_disciplina = $request->disciplina;
	$grade->grade_dia= $request->dia;
	$grade->grade_turnos = $request->turnos;
	$grade->grade_campus = $request->campus;
	$grade->grade_bloco = $request->bloco;
	$grade->grade_sala = $request->sala;
	$grade->save();

	return redirect('grade/listar');

	}


}
