<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Estado;

class ConcursoController extends Controller
{
    public function index(){
        return view('layouts.welcome');
    }
    public function novocandidato(Request $request){
        $estado = Estado::all();
        
        return view('concursos.novoCandidato', ['estado' => $estado]);
    }
}
