<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Campus;
use App\Http\Requests\CampusRequests;

class CampusController extends Controller{

public function __contruct(){

	$this->middleware('auth');
} 

public function listar(){

	return view('campus/listar', ['campuss'=>Campus::all()]);
}

public function criar(){

	return view('campus/criar', ['campus'=> new Campus]);
}
	
public function editar($id){

	return view('campus/editar', ['campus'=>Campus::find($id)]);
}	

public function remover($id){

      $campus = Campus::find($id);
      $campus -> delete();

      return redirect ('campus/listar');
}

public function salvar(CampusRequests $request){

	$campus = new Campus();
	if ($request->id) {
		$campus=Campus::find($request->id);
	}

	$campus->campus_nome = $request->campus_nome;
	$campus->campus_logradouro = $request->campus_logradouro;
	$campus->campus_complemento = $request->campus_complemento;
	$campus->campus_cidade= $request->campus_cidade;
	$campus->campus_uf = $request->campus_uf;
	$campus->save();

	return redirect('campus/listar');
	
	}

	
}







