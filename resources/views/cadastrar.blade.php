@extends('template')

@section('content')


<div class="cadastrar-paciente">
    <h2 class="cadastrar-h2">Cadastrar Paciente</h2>
    <form action="{{ route('salvar') }}" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="nome" id="campo-nome">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-rg">RG</label>
                <input type="numeric" class="form-control" name="rg" id="campo-rg">
            </div>
            <div class="form-group col-md-6">
                <label for="campo-cpf">CPF *</label>
                <input type="numeric" class="form-control" name="cpf" id="campo-cpf">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="campo-telefone">Telefone *</label>
                <input type="tel" class="form-control" name="telefone" id="campo-telefone">
            </div>
            <div class="form-group col-md-8">
                <label for="campo-email">E-mail</label>
                <input type="text" class="form-control" name="email" id="campo-email">
            </div>
        </div>

        <div class="form-group">
            <label for="campo-endereco">Endereço *</label>
            <input type="text" class="form-control" name="endereco" id="campo-endereco">
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="campo-complemento">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="campo-complemento">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-bairro">Bairro *</label>
                <input type="text" class="form-control" name="bairro" id="campo-bairro">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-cidade">Cidade *</label>
                <input type="text" class="form-control" name="cidade" id="campo-cidade">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-estado">Estado *</label>
                <input type="text" class="form-control" name="estado" id="campo-estado">
            </div>
            <div class="form-group col-md-2">
                <label for="campo-cep">CEP *</label>
                <input type="numeric" class="form-control" name="cep" id="campo-cep">
            </div>                                
        </div>

        <div class="form-row last-form-row">
            <div class="form-group col-md-12">
            <label for="">Convênio *</label></br>
            <select class="convenio">
                <option name="convenio" value="unimed">PARTICULAR</option>
                <option name="convenio" value="unimed">UNIMED</option>
                <option name="convenio" value="smile">SMILE</option>
                <option name="convenio" value="hapvida">HAPVIDA</option>
                <option name="convenio" value="unimed">BRADESCO</option>
            </select>
            </div>
        </div>
        
        <button type="submit" name="cadastrar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="cadastrar" value="1" class="btn btn-primary btn-cadastrar">Cadastrar</button>    
    </form>
</div>






@endsection