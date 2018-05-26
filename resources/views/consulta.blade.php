@extends('template')

@section('content')

<div class="form-consulta">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Anamnese</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recordatório</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Plano Alimentar</a>
            </li>
        </ul>

    <form action="{{ route('salvar') }}" method="post">

        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="campo-peso">Peso</label>
                        <input type="numeric" class="form-control" name="peso" id="campo-peso">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="campo-altura">Altura</label>
                        <input type="numeric" class="form-control" name="altura" id="campo-altura">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="campo-imc">IMC</label>
                        <input type="numeric" class="form-control" name="imc" id="campo-imc">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="campo-mm">Massa Muscular (%)</label>
                        <input type="numeric" class="form-control" name="mm" id="campo-mm">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="campo-gordura">Gordura (%)</label>
                        <input type="numeric" class="form-control" name="gordura" id="campo-gordura">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="campo-lactose">Hipolactasia</label><br>
                        <input type="radio" name="lactose" value="nao" checked><span>Não</span>
                        <input type="radio" name="lactose" value="sim"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-diabetes">Diabetes</label><br>
                        <input type="radio" name="diabetes" value="nao" checked><span>Não</span>
                        <input type="radio" name="diabetes" value="sim"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-hipertensao">Hipertensão</label><br>
                        <input type="radio" name="hipertensao" value="nao" checked><span>Não</span>
                        <input type="radio" name="hipertensao" value="sim"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-cardiaco">Doença Cardíaca</label><br>
                        <input type="radio" name="cardiaco" value="nao" checked><span>Não</span>
                        <input type="radio" name="cardiaco" value="sim"><span>Sim</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="campo-exercicio">Exercícios Regulares</label><br>
                        <input type="radio" name="exercicio" value="nao" checked><span>Não</span>
                        <input type="radio" name="exercicio" value="sim"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-frequencia">Frequência dos Exercícios</label>
                        <input type="text" class="form-control" name="frequencia" id="campo-frequencia">
                    </div>          
                </div>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="campo-altura">Altura</label>
                        <input type="numeric" class="form-control" name="altura" id="campo-altura">
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="campo-imc">IMC</label>
                        <input type="numeric" class="form-control" name="imc" id="campo-imc">
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" name="cadastrar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="cadastrar" value="1" class="btn btn-primary btn-cadastrar">Cadastrar</button>
    </form>

</div> <!-- form-consulta -->

<div class="form-consulta">
    <h2 class="cadastrar-h2">Ficha de Consulta</h2>
    <form action="{{ route('salvar') }}" method="post">
    @csrf
        <!-- @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Ops!</strong></p> 
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        
        @endif -->

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="campo-peso">Peso</label>
                <input type="numeric" class="form-control" name="peso" id="campo-peso">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-altura">Altura</label>
                <input type="numeric" class="form-control" name="altura" id="campo-altura">
            </div>
            <div class="form-group col-md-4">
                <label for="campo-imc">IMC</label>
                <input type="numeric" class="form-control" name="imc" id="campo-imc">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="campo-mm">Massa Muscular (%)</label>
                <input type="numeric" class="form-control" name="mm" id="campo-mm">
            </div>
            <div class="form-group col-md-6">
                <label for="campo-gordura">Gordura (%)</label>
                <input type="numeric" class="form-control" name="gordura" id="campo-gordura">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="campo-lactose">Hipolactasia</label><br>
                <input type="radio" name="lactose" value="nao" checked><span>Não</span>
                <input type="radio" name="lactose" value="sim"><span>Sim</span>
            </div>
            <div class="form-group col-md-3">
                <label for="campo-diabetes">Diabetes</label><br>
                <input type="radio" name="diabetes" value="nao" checked><span>Não</span>
                <input type="radio" name="diabetes" value="sim"><span>Sim</span>
            </div>
            <div class="form-group col-md-3">
                <label for="campo-hipertensao">Hipertensão</label><br>
                <input type="radio" name="hipertensao" value="nao" checked><span>Não</span>
                <input type="radio" name="hipertensao" value="sim"><span>Sim</span>
            </div>
            <div class="form-group col-md-3">
                <label for="campo-cardiaco">Doença Cardíaca</label><br>
                <input type="radio" name="cardiaco" value="nao" checked><span>Não</span>
                <input type="radio" name="cardiaco" value="sim"><span>Sim</span>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="campo-exercicio">Exercícios Regulares</label><br>
                <input type="radio" name="exercicio" value="nao" checked><span>Não</span>
                <input type="radio" name="exercicio" value="sim"><span>Sim</span>
            </div>
            <div class="form-group col-md-3">
                <label for="campo-frequencia">Frequência dos Exercícios</label>
                <input type="text" class="form-control" name="frequencia" id="campo-frequencia">
            </div>          
        </div>
        <button type="submit" name="cadastrar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="cadastrar" value="1" class="btn btn-primary btn-cadastrar">Cadastrar</button>
          
    </form>
</div>

@endsection