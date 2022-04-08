<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Inscricao;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\PessoaFisica;


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

    public function meusConcursos(Request $request){
        $inscricaoOwner = PessoaFisica::where('id', $request->user_id)->first()->toArray();
        $user = auth()->user();
        
        $inscricao = Inscricao::all();
        $pessoafisica = PessoaFisica::loadInscricaoById($request); 
        $estado = Estado::findOrfail($estados_id);
        $cidade = Cidade::findOrfail($cidades_id);
        
        

        return view('concursos.showInscricao', ['user' => $user, 
                                                'pessoafisica' => $pessoafisica, 
                                                'estado' => $estado, 
                                                'cidade' => $cidade, 
                                                'inscricao'=>$inscricao,
                                                'inscricaoOwner' => $inscricaoOwner]);
    }
}
