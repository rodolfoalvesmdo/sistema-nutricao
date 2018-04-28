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
                <!-- <select id="campo-estado" class="form-control">
                    <option selected>Selecione o Estado</option>
                    <option name="estado">AC</option>
                    <option name="estado">AL</option>
                    <option name="estado">AP</option>
                    <option name="estado">AM</option>               
                    <option name="estado">BA</option>               
                    <option name="estado">CE</option>               
                    <option name="estado">DF</option>               
                    <option name="estado">ES</option>               
                    <option name="estado">GO</option>               
                    <option name="estado">MA</option>               
                    <option name="estado">MT</option>               
                    <option name="estado">MS</option>               
                    <option name="estado">MG</option>               
                    <option name="estado">PA</option>               
                    <option name="estado">PB</option>               
                    <option name="estado">PR</option>               
                    <option name="estado">PE</option>               
                    <option name="estado">PI</option> 
                    <option name="estado">RJ</option>               
                    <option name="estado">RN</option>               
                    <option name="estado">RS</option>               
                    <option name="estado">RO</option>               
                    <option name="estado">RR</option>               
                    <option name="estado">SC</option>               
                    <option name="estado">SP</option>               
                    <option name="estado">SE</option>               
                    <option name="estado">TO</option>        
                                
                </select> -->
            </div>
            <div class="form-group col-md-2">
                <label for="campo-cep">CEP *</label>
                <input type="numeric" class="form-control" name="cep" id="campo-cep">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

    </form>
</div>






@endsection