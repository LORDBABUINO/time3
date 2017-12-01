<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gradeconsultaController extends Controller
{
  public function index()
  {
      return view('gradeconsulta');
  }
}
