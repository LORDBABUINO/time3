<?php

namespace App\Http\Controllers;

use App\Salas;
use App\Campus;
use App\Bloco;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SalasRequest;

class SalasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar(Request $request)
    {

         if ($request->chave){
            $salas = DB::table('salas')
                    ->where('nome','like', '%'.$request->chave.'%')
                    ->orWhere('descricao','like', '%'.$request->chave.'%')
                    ->paginate(10);
         }
         else
         {
             $salas = Salas::paginate(10);

         }
         return view('salas/listarSalas', ['salas' => $salas]);

    }

    public function editar($id)
    {
        $sala = Salas::find($id);
        $campus = Campus::all();
        $bloco = Bloco::all();
        return view('salas/editarSalas', ['campus' => $campus, 'bloco' => $bloco, 'sala' => $sala]);
    }

    public function cadastro()
    {
        $campus = Campus::all();
        $bloco = Bloco::all();

        return view('salas/cadastroSalas', ['campus' => $campus, 'bloco' => $bloco,'sala' => new Salas]);
    }
    public function remover($id){

        $sala = Salas::find($id);
        $sala -> delete();
        return redirect ('/salas/listar');
    }
    public function salvar(SalasRequest $request){

        $sala = new Salas();
        if ($request->id){
            $sala = Salas::find($request->id);
        }

        $sala->nome= $request->nome;
        $sala->descricao = $request->descricao;
        $sala->campus()->associate($request->campus);
        $sala->bloco()->associate($request->bloco);

        $sala->save();

        return redirect('/salas/listar');
    }
}
