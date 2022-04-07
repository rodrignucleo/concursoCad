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

    public function novocandidato(Request $request){
        $estado = Estado::all();
        $cidade = Cidade::all();

        return view('concursos.novoCandidato', ['estado' => $estado, 'cidade' => $cidade]);
    }
}
