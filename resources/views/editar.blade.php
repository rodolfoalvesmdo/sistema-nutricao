@extends('template')
@section('content')


<div class="cadastrar-paciente">
    <h2 class="cadastrar-h2">Editar Cadastro</h2>
    <form action="{{ route('edit-save') }}" method="post" enctype="multipart/form-data">
    @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Ops!</strong></p> 
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        
        @endif
    
        <div class="form-group">
            <label for="campo-foto">Foto</label>
            <input type="file" class="form-control" name="foto" id="campo-foto">
        </div>

        <div class="form-group">
            <label for="campo-nome">Nome *</label>
            <input type="text" class="form-control" name="nome" id="campo-nome" value="{{ $paciente['nome'] }}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-rg">RG</label>
                <input type="numeric" class="form-control" name="rg" id="campo-rg" value="{{ $paciente['rg'] }}">
            </div>
            <div class="form-group col-md-6">
                <label for="campo-cpf">CPF *</label>
                <input type="numeric" class="form-control" name="cpf" id="campo-cpf" value="{{ $paciente['cpf'] }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="campo-telefone">Telefone *</label>
                <input type="tel" class="form-control" name="telefone" id="campo-telefone" value="{{ $paciente['telefone'] }}">
            </div>
            <div class="form-group col-md-8">
                <label for="campo-email">E-mail</label>
                <input type="text" class="form-control" name="email" id="campo-email" value="{{ $paciente['email'] }}">
            </div>
        </div>

        <div class="form-group">
            <label for="campo-endereco">Endereço *</label>
            <input type="text" class="form-control" name="endereco" id="campo-endereco" value="{{ $paciente['endereco'] }}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="campo-complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="campo-complemento" value="{{ $paciente['complemento'] }}">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-bairro">Bairro *</label>
                <input type="text" class="form-control" name="bairro" id="campo-bairro" value="{{ $paciente['bairro'] }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-cidade">Cidade *</label>
                <input type="text" class="form-control" name="cidade" id="campo-cidade" value="{{ $paciente['cidade'] }}">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-estado">Estado *</label>
                <input type="text" class="form-control" name="estado" id="campo-estado" value="{{ $paciente['estado'] }}">
            </div>
            <div class="form-group col-md-2">
                <label for="campo-cep">CEP *</label>
                <input type="numeric" class="form-control" name="cep" id="campo-cep" value="{{ $paciente['cep'] }}">
            </div>                                
        </div>

        <div class="form-row last-form-row">
            <div class="form-group col-md-14">
                <label for="">Convênio *</label></br>
                <select name="convenio" class="convenio">
                    <option value="particular">PARTICULAR</option>
                    <option value="unimed">UNIMED</option>
                    <option value="smile">SMILE</option>
                    <option value="hapvida">HAPVIDA</option>
                    <option value="bradesco">BRADESCO</option>
                </select>
            </div>
        </div>
        
        <button type="submit" name="salvar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="salvar" value="{{ $paciente['id'] }}" class="btn btn-primary btn-cadastrar">Salvar</button>   
    </form>
</div>




@endsection