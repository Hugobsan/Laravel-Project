<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        $motivos_contato = MotivoContato::all();

        return view('site.contato', ['motivos_contato'=>$motivos_contato]);
    }
    public function salvar(Request $request){
        //realizar a validação dos dados disponíveis no request
        $request->validate([
            'nome' => 'min:2|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required'
        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    
    }
}
