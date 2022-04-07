<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PessoaFisica;
use App\Models\Estado;
use App\Models\Cidade;

class PessoaFisicaController extends Controller
{
   
    public function __construct(){}

    public function createPessoaFisica(){
        $estado = Estado::all();
        $cidade = Cidade::all();

        return view('concursos.createPessoaFisica', ['estado' => $estado, 'cidade' => $cidade]);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'nome' => 'required',
			    'cpf' => 'required',
			    'endereco' => 'required',
			    'cidade_id' => 'required',
			    'estado_id' => 'required',
            ]
        );
        
        
	    $pessoa = new PessoaFisica();
	    $pessoa->nome = $request->nome;
	    $pessoa->cpf = $request->cpf;
	    $pessoa->endereco = $request->endereco;
	    $pessoa->cidade_id = $request->cidade_id;
	    $pessoa->estado_id = $request->estado_id;
	    
        return json_encode(PessoaFisica::createPessoaFisica($pessoa));
    }
    
    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
                'id' => 'required',
                'nome' => 'required',
			    'cpf' => 'required',
			    'endereco' => 'required',
			    'cidade_id' => 'required',
			    'estado_id' => 'required',
            ]
        );
        
	    $pessoa = PessoaFisica::find($request->id);
	    $pessoa->nome = $request->nome;
	    $pessoa->cpf = $request->cpf;
	    $pessoa->endereco = $request->endereco;
	    $pessoa->cidade_id = $request->cidade_id;
	    $pessoa->estado_id = $request->estado_id;
	    
        return json_encode(PessoaFisica::updatePessoaFisica($pessoa));
    }

    public function index(Request $request)
    {
    	$this->validate(
            $request,
            [
                'nome' => 'nullable'
            ]
        );
        
        if(null != $request->nome){
        	$result = PessoaFisica::where('nome', $request->nome)->orderBy('nome')->get();
        	return json_encode($result);
        }
        
        return json_encode(PessoaFisica::orderBy('nome')->get());
    }

    public function show(Request $request, $id)
    {
        return json_encode(PessoaFisica::loadPessoaFisicaById($id));
    }


    public function destroy(Request $request, $id)
    {
        $pessoa = PessoaFisica::find($id);
	    
        return json_encode(PessoaFisica::deletePessoaFisica($pessoa));
    }

}
