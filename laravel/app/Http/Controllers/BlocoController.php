<?php

namespace App\Http\Controllers;

use App\Campus;
use Illuminate\Http\Request;

class BlocoController extends Controller
{
    public function index()
    {
        $bloco = new \App\Bloco();
        $bloco->nome = "bloco ".rand();
        $bloco->descricao = "Segundo bloco";
        $campus = Campus::find(1);
        $bloco->campus()->associate($campus);
        $bloco->save();

        return redirect('/salas/listar');
    }

}
