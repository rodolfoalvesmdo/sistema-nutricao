<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function paginaClinica() {
        return view('clinica');
    }

    public function paginaCadastrar(){
        return view('cadastrar');
    }

    public function cadastrarPaciente(Request $request) {
        
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required | numeric',
            'telefone' => 'required | numeric',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'cep' => 'required | numeric'
        ]);
    
        if(!empty($_FILES['foto']['name'])) {
            $request->foto->storeAs('public/fotos', 'foto_paciente.jpg');
        }

        echo "<script>alert('Paciente cadastrado com sucesso!');</script>";

        // com redirect()->back(); o echo acima não funciona
        return view('cadastrar');
    }
}
