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

	$grade->grade_semestre = $request->grade_semestre;
	$grade->grade_curso = $request->grade_curso;
	$grade->grade_disciplina = $request->grade_disciplina;
	$grade->grade_dia= $request->grade_dia;
	$grade->grade_turnos = $request->grade_turnos;
	$grade->grade_campus = $request->grade_campus;
	$grade->grade_bloco = $request->grade_bloco;
	$grade->grade_sala = $request->grade_sala;
	$grade->save();

	return redirect('grade/listar');

	}


}
