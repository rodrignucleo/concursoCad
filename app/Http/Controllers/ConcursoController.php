<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estado;
use App\Models\Cidade;

class ConcursoController extends Controller
{
    public function index(){
        return view('layouts.welcome');
    }

    public function concurso(Request $request){
        $estado = Estado::all();
        $cidade = Cidade::all();

        return view('concursos.concurso', ['estado' => $estado, 'cidade' => $cidade]);
    }
}
