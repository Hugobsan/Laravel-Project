<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request) {
        
        //Tratamento de tipos de erro
        $erro = '';
        switch ($request -> get('erro')){
            case 1:
                $erro = "Usuário e/ou senha incorretos!";
                break;

        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
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

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if(isset($usuario->name))
            return redirect()->route('site.index'); 
        else
            return redirect()->route('site.login', ['erro' => 1]); 
    }
}
