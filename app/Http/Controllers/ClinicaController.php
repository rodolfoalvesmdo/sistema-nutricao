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
                'cep' => 'required'
            ]);
        
            if(!empty($_FILES['foto']['name'])) {
                $request->foto->storeAs('public/fotos', 'foto_paciente.jpg');
            }

            // Paciente::create($request->all());
            Paciente::create($request->only([
                'nome',
                'rg',
                'cpf',
                'telefone',
                'email',
                'endereco',
                'complemento',
                'bairro',
                'cidade',
                'estado',
                'cep',
                'convenio'
            ]));

            echo "<script>alert('Paciente cadastrado com sucesso!');</script>";
            
            // com redirect()->back(); o echo acima não funciona
            return view('cadastrar');
            } else {
                return redirect()->route('clinica');
            }
    }

    public function paginaConsulta(int $id) {
        $paciente = Paciente::find($id);
        return view('consulta', ['paciente' => $paciente]);
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

    public function salvarFicha(Request $request) {
        
        if($request->salvar == 0) {
            return redirect()->route('pesquisar');
        } else {

            $request->validate([
                'peso' => 'required | numeric',
                'altura' => 'required | numeric',
                'imc' => 'required | numeric',
                'mm' => 'required | numeric',
                'gordura' => 'required | numeric'
            ]);

            $id = $request->salvar;
            $paciente = Paciente::find($id);                            
            $paciente->peso = $request->peso;
            $paciente->altura = $request->altura;
            $paciente->imc = $request->imc;
            $paciente->mm = $request->mm;
            $paciente->gordura = $request->gordura;
            $paciente->lactose = $request->lactose;
            $paciente->diabetes = $request->diabetes;
            $paciente->hipertensao = $request->hipertensao;
            $paciente->cardiaco = $request->cardiaco;
            $paciente->exercicio = $request->exercicio;
            $paciente->frequencia = $request->frequencia;
            $paciente->rf_manha = $request->rf_manha;
            $paciente->rf_tarde = $request->rf_tarde;
            $paciente->rf_noite = $request->rf_noite;
            $paciente->cafe_manha = $request->cafe_manha;
            $paciente->lanche_manha = $request->lanche_manha;
            $paciente->almoco = $request->almoco;
            $paciente->lanche_tarde = $request->lanche_tarde;
            $paciente->jantar = $request->jantar;
            $paciente->ceia = $request->ceia;

            $paciente->save();

            // echo "<script>alert('Paciente cadastrado com sucesso!');</script>";
            
            // com redirect()->back(); o echo acima não funciona
            return redirect()->route('pesquisar');
        }
            
    }

}
   
    

    

