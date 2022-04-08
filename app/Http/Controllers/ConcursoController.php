<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estado;
use App\Models\Cidade;

class ConcursoController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('layouts.welcome', ['user' => $user]);
    }

    public function concurso(Request $request){
        $estado = Estado::all();
        $cidade = Cidade::all();
        
        return view('concursos.concurso', ['estado' => $estado, 'cidade' => $cidade]);
    }
}
