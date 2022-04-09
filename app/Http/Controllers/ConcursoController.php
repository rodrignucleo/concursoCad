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

    public function meusConcursos(){
        $user = auth()->user();
        
        //$pessoafisica = PessoaFisica::find($user->id_perfil); 
        
        
        $id_perfil = $user->id;
        //$concursoPessoa = User::where('id', $pessoafisica->id_perfil)->first()->toArray();
        $pessoafisica = PessoaFisica::find($id_perfil); 
        $inscricao = Inscricao::all();

        ## Tentando ajustar para mostrar somente os concursos do ID Perfil do usuário logado...
        
        //$pessoaId = $pessoafisica->pessoa_fisica_id;
        $estado = Estado::findOrfail($pessoafisica->estados_id);
        $cidade = Cidade::findOrfail($pessoafisica->cidades_id);

        return view('concursos.showInscricao', ['user' => $user, 
                                                'pessoafisica' => $pessoafisica, 
                                                'estado' => $estado, 
                                                'cidade' => $cidade,
                                                'inscricao' => $inscricao
                                                //'concursoPessoa' => $concursoPessoa
                                                //'pessoaId'=>$pessoaId
        ]);
    }
}
