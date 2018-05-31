@extends('template')
@section('content')

<div class="cadastrar-paciente">
    <h2 class="cadastrar-h2">Cadastro Paciente</h2>
    <form action="{{ route('editar', ['editar' => $paciente['id']] ) }}">
    
        <div class="form-group">
            <label for="campo-foto">Foto</label>
        </div>

        <div class="form-group">
            <label for="campo-nome">Nome *</label>
            <input type="text" class="form-control" name="nome" id="campo-nome" value="{{ $paciente['nome'] }}" disabled>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-rg">RG</label>
                <input type="numeric" class="form-control" name="rg" id="campo-rg" value="{{ $paciente['rg'] }}" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="campo-cpf">CPF *</label>
                <input type="numeric" class="form-control" name="cpf" id="campo-cpf" value="{{ $paciente['cpf'] }}" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="campo-telefone">Telefone *</label>
                <input type="tel" class="form-control" name="telefone" id="campo-telefone" value="{{ $paciente['telefone'] }}" disabled>
            </div>
            <div class="form-group col-md-8">
                <label for="campo-email">E-mail</label>
                <input type="text" class="form-control" name="email" id="campo-email" value="{{ $paciente['email'] }}" disabled>
            </div>
        </div>

        <div class="form-group">
            <label for="campo-endereco">Endereço *</label>
            <input type="text" class="form-control" name="endereco" id="campo-endereco" value="{{ $paciente['endereco'] }}" disabled>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="campo-complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="campo-complemento" value="{{ $paciente['complemento'] }}" disabled>
            </div>
            <div class="form-group col-md-4">
                <label for="campo-bairro">Bairro *</label>
                <input type="text" class="form-control" name="bairro" id="campo-bairro" value="{{ $paciente['bairro'] }}" disabled>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-cidade">Cidade *</label>
                <input type="text" class="form-control" name="cidade" id="campo-cidade" value="{{ $paciente['cidade'] }}" disabled>
            </div>
            <div class="form-group col-md-4">
                <label for="campo-estado">Estado *</label>
                <input type="text" class="form-control" name="estado" id="campo-estado" value="{{ $paciente['estado'] }}" disabled>
            </div>
            <div class="form-group col-md-2">
                <label for="campo-cep">CEP *</label>
                <input type="numeric" class="form-control" name="cep" id="campo-cep" value="{{ $paciente['cep'] }}" disabled>
            </div>                                
        </div>

        <div class="form-row last-form-row">
            <div class="form-group col-md-14">
                <label for="">Convênio *</label></br>
                <input type="text" class="form-control" value="{{ $paciente['convenio'] }}" style="text-transform: uppercase" disabled>
            </div>
        </div>
        
        <button type="submit" name="editar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="editar" value="{{ $paciente['id'] }}" class="btn btn-primary btn-cadastrar">Editar</button>   
    </form>
</div>


@endsection