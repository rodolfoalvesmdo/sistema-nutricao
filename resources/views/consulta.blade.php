@extends('template')

@section('content')

<div class="form-consulta">
    <h2 class="cadastrar-h2">Ficha de Consulta</h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#anamnese" role="tab" aria-controls="home" aria-selected="true">Anamnese</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#recordatorio" role="tab" aria-controls="profile" aria-selected="false">Recordatório</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#plano" role="tab" aria-controls="contact" aria-selected="false">Plano Alimentar</a>
        </li>
    </ul>

    <form action="{{ route('salvar-ficha') }}" method="post">
    @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                <p><strong>Ops!</strong></p> 
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            
        @endif
        
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="anamnese" role="tabpanel" aria-labelledby="home-tab">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="campo-peso">Peso</label>
                        <input type="numeric" class="form-control" name="peso" id="campo-peso" value="{{ $paciente['peso'] }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="campo-altura">Altura (cm)</label>
                        <input type="numeric" class="form-control" name="altura" id="campo-altura" value="{{ $paciente['altura'] }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="campo-imc">IMC</label>
                        <input type="numeric" class="form-control" name="imc" id="campo-imc" value="{{ $paciente['imc'] }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="campo-mm">Massa Muscular (%)</label>
                        <input type="numeric" class="form-control" name="mm" id="campo-mm" value="{{ $paciente['mm'] }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="campo-gordura">Gordura (%)</label>
                        <input type="numeric" class="form-control" name="gordura" id="campo-gordura" value="{{ $paciente['gordura'] }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="campo-lactose">Hipolactasia</label><br>
                        <input type="radio" name="lactose" value="0" checked><span>Não</span>
                        <input type="radio" name="lactose" value="1"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-diabetes">Diabetes</label><br>
                        <input type="radio" name="diabetes" value="0" checked><span>Não</span>
                        <input type="radio" name="diabetes" value="1"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-hipertensao">Hipertensão</label><br>
                        <input type="radio" name="hipertensao" value="0" checked><span>Não</span>
                        <input type="radio" name="hipertensao" value="1"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-cardiaco">Doença Cardíaca</label><br>
                        <input type="radio" name="cardiaco" value="0" checked><span>Não</span>
                        <input type="radio" name="cardiaco" value="1"><span>Sim</span>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="campo-exercicio">Exercícios Regulares</label><br>
                        <input type="radio" name="exercicio" value="0" checked><span>Não</span>
                        <input type="radio" name="exercicio" value="1"><span>Sim</span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="campo-frequencia">Frequência dos Exercícios</label>
                        <input type="text" class="form-control" name="frequencia" id="campo-frequencia" value="{{ $paciente['frequencia'] }}">
                    </div>          
                </div>
            </div>

            <div class="tab-pane fade" id="recordatorio" role="tabpanel" aria-labelledby="profile-tab">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Refeição Manhã</label>
                        <textarea class="form-control" name="rf_manha" id="campo-rf-manha" value="{{ $paciente['rf_manha'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Refeição Tarde</label>
                        <textarea class="form-control" name="rf_tarde" id="campo-rf-tarde" value="{{ $paciente['rf_tarde'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Refeição Noite</label>
                        <textarea class="form-control" name="rf_noite" id="campo-rf-noite" value="{{ $paciente['rf_noite'] }}"></textarea>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="plano" role="tabpanel" aria-labelledby="contact-tab">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Café da Manhã</label>
                        <textarea class="form-control" name="cafe_manha" id="campo-cafe-manha" rows="5" value="{{ $paciente['cafe_manha'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Lanche da Manhã</label>
                        <textarea class="form-control" name="lanche_manha" id="campo-lanche-manha" rows="5" value="{{ $paciente['lanche_manha'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Almoço</label>
                        <textarea class="form-control" name="almoco" id="campo-almoco" rows="5" value="{{ $paciente['almoco'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Lanche da Tarde</label>
                        <textarea class="form-control" name="lanche_tarde" id="campo-lanche-tarde" rows="5" value="{{ $paciente['lanche_tarde'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Jantar</label>
                        <textarea class="form-control" name="jantar" id="campo-jantar" rows="5" value="{{ $paciente['jantar'] }}"></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="campo-altura">Ceia</label>
                        <textarea class="form-control" name="ceia" id="campo-ceia" rows="5" value="{{ $paciente['ceia'] }}"></textarea>
                    </div>
                </div>

            </div>

        </div>

        <button type="submit" name="salvar" value="0" class="btn btn-primary">Cancelar</button>
        <button type="submit" name="salvar" value="{{ $paciente['id'] }}" class="btn btn-primary btn-cadastrar">Salvar</button>
    </form>

</div> <!-- form-consulta -->

@endsection