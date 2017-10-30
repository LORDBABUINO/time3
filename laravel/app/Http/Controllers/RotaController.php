<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotaController extends Controller
{
    public function index()
    {
        return view('rota');
    }
    
}