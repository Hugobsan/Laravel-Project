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
        $regras = [
            'nome' => 'min:2|max:40',
            'telefone' => 'required|unique:site_contatos',
            'email' => 'email|unique:site_contatos',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'required'=>'O campo :attribute deve ser preenchido.',
            'unique'=>'Este :attribute já está em uso.',
            'nome.min'=>'O nome deve ter no mínimo 2 caracteres.',
            'nome.max'=>'O nome deve ter no máximo 40 caracteres.',
            'email'=>'O email informado não é válido.',
            'mensagem'=>'A mensagem não pode ter mais que 2000 caracteres.',
            'motivo_contatos_id.required' => 'É necessário escolher um motivo do contato.'   
        ];

        //realizar a validação dos dados disponíveis no request
        $request->validate($regras,$feedback);
        
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    
    }
}
