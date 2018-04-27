<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function paginaHome() {
        return view('home');
    }

    public function login(Request $request) {

        if($request->login == 'admin' && $request->senha == 'admin')
            return redirect()->route('clinica');
        else
            return redirect()->back()->with('erro', 'Senha ou login inválido.');
    
    }
}
