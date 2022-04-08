<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\PessoaFisica;

class InscricaoController extends Controller
{
    public function __construct(){}

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
			    'pessoa_fisica_id' => 'required',
			    'cargo' => 'required',
			    'situacao' => 'required'
            ]
        );
        
	    $inscricao = new Inscricao();
	    $inscricao->pessoa_fisica_id = $request->pessoa_fisica_id;
	    $inscricao->cargo = $request->cargo;
	    $inscricao->situacao = $request->situacao;
        
        
        return redirect('/');
    }
    
    public function update(Request $request)
    {
        $this->validate(
            $request,
            [
            	'id' => 'required',
			    'pessoa_fisica_id' => 'required',
			    'cargo' => 'required',
			    'situacao' => 'required',
            ]
        );
        
	    $inscricao = Inscricao::find($request->id);
	    $inscricao->pessoa_fisica_id = $request->pessoa_fisica_id;
	    $inscricao->cargo = $request->cargo;
	    $inscricao->situacao = $request->situacao;
	    
	    return json_encode(Inscricao::updateInscricao($inscricao));
    }

    public function index(Request $request)
    {
    	/*$this->validate(
            $request,
            [
			    'cargo' => 'nullable'
            ]
        );
        
        if(null != $request->cargo){
        	$result = Inscricao::where('cargo', $request->cargo)->orderBy('cargo')->get();
        	return json_encode($result);
        }
        
        return json_encode(Inscricao::orderBy('cargo')->get());*/

        $inscricao = Inscricao::all();
        $pessoafisica = PessoaFisica::all();
        $estado = Estado::all();
        $cidade = Cidade::all();
        
        return view('concursos.createPessoaFisica', ['estado' => $estado, 'cidade' => $cidade, 'inscricao' => $inscricao, 'pessoafisica' => $pessoafisica]);
    }

    public function show(Request $request, $id)
    {
        return json_encode(Inscricao::loadInscricaoById($id));
    }

    public function destroy(Request $request, $id)
    {
        $inscricao = Inscricao::find($id);
	    
        return json_encode(Inscricao::deleteInscricao($inscricao));
    }

}