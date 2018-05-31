<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class ClinicaController extends Controller
{
    public function paginaClinica() {
        return view('clinica');
    }

    public function paginaCadastrar() {
        return view('cadastrar');
    }

    public function cadastrarPaciente(Request $request) {
        
        if ($request->cadastrar == 1) {
        
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

            Paciente::create($request->all());

            echo "<script>alert('Paciente cadastrado com sucesso!');</script>";
            
            // com redirect()->back(); o echo acima não funciona
            return view('cadastrar');
            } else {
                return redirect()->route('clinica');
            }
    }

    public function paginaConsulta() {
        return view('consulta');
    }
    
    public function pesquisarPaciente() {
        $pacientes = Paciente::all();
        return view('pesquisar', ['pacientes' => $pacientes]);
    }

    public function visualizarCadastro(int $id) {
        $paciente = Paciente::find($id);
        return view('cadastro-paciente', ['paciente' => $paciente]);
    }

    public function editarCadastro(Request $request, int $id) {
        
        $paciente = Paciente::find($id);
        if($request->editar == 0) {
            return redirect()->route('pesquisar');
        }            
        return view('editar', ['paciente' => $paciente]);
            
    }

    public function editarShortcut(int $id) {
        $paciente = Paciente::find($id);
        return view('editar', ['paciente' => $paciente]);
    }

    public function editSave(Request $request) {
        if($request->salvar == 0) {
            return redirect()->route('pesquisar');
        } else {

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
        
            $id = $request->salvar;
            $paciente = Paciente::find($id);
            $paciente->nome = $request->nome;
            $paciente->rg = $request->rg;
            $paciente->cpf = $request->cpf;
            $paciente->telefone = $request->telefone;
            $paciente->email = $request->email;
            $paciente->endereco = $request->endereco;
            $paciente->complemento = $request->complemento;
            $paciente->bairro = $request->bairro;
            $paciente->cidade = $request->cidade;
            $paciente->estado = $request->estado;
            $paciente->cep = $request->cep;
            $paciente->convenio = $request->convenio;
            $paciente->save();

            return redirect()->route('cadastro-paciente', ['id' => $paciente->id]);
        }
    }

    public function excluirPaciente(int $id) {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect()->route('pesquisar');
    }

}
   
    

    

