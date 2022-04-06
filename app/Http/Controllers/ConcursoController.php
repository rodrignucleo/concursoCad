<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    public function index(){
        return view('layouts.welcome');
    }
    public function new(){
        return view('concursos.new');
    }
}
