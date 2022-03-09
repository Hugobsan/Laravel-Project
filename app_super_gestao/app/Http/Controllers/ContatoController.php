<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        /*if(!empty($request->input('nome'))){
        $contato = new SiteContato();
        $contato->create($request->all());
        }*/
        $motivos_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['motivos_contato'=>$motivos_contato]);
    }
    public function salvar(Request $request){
        //realizar a validação dos dados disponíveis no request
        $request->validate([
            'nome' => 'min:2|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'
        ]);
        //SiteContato::create($request->all());
    
    }
}
