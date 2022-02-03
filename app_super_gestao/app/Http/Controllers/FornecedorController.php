<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11', //São Paulo (SP)
                'telefone' => '0000-0000'
            ], 
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza (CE)
                'telefone' => '0000-0001'
            ],  
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de Fora (MG)
                'telefone' => '0000-0002'
            ]
        ];

        $ddd = [
            11 => [
                'cidade' => 'São Paulo',
                'estado' => 'SP'
            ],
            85 => [
                'cidade' => 'Fortaleza',
                'estado' => 'CE'
            ],
            32 => [
                'cidade' => 'Juiz de Fora',
                'estado' => 'MG'
            ]
        ];
        
        return view('app.fornecedor.index', compact('fornecedores', 'ddd'));
    }
}
