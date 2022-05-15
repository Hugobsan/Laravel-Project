<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }

    public function listar() {
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request) {
        
        if($request->input('_token') != ''){
            //validação
            $regras = [
                'nome' => 'required|min:2|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            $feedback = [
                'required' => 'O campo :attribute é obrigatório',
                'nome.min' => 'O nome deve ter no mínimo 2 caracteres',
                'nome.max' => 'O nome deve ter no máximo 40 caracteres',
                'uf.min' => 'O formato da UF está incorreto',
                'uf.max' => 'O formato da UF está incorreto',
                'email.email' => 'Insira um email válido'
            ];

            $request->validate($regras, $feedback);
            
        }
        return view('app.fornecedor.adicionar');

        $fornecedor = new Fornecedor();
        $fornecedor->create($request->all());
    }
}

