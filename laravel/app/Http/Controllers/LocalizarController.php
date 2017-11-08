<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizarController extends Controller
{
    public function index()
    {
        return view('localizar');
    }
    
}