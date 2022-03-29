<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request) {
        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required'
        ];

        $feedback = [
            'required'=>'O campo :attribute é obrigatório.',
            'usuario.email' => 'Insira um email válido'
        ];

        $request->validate($regras, $feedback);
        return redirect()->route('site.index');
    }
}
