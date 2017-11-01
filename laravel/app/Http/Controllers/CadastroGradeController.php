<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroGradeController extends Controller
{

  public function index()
  {
      return view('grade/cadastro');
  }
}
