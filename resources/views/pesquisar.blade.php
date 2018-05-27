@extends('template')
@section('content')

<h1>Pesquisar Paciente</h1>

<div class="head-lista">
    <p>Nome</p>
</div>

<div class="lista-pacientes">

    @foreach($pacientes as $paciente)
        <ul>
            <li><a href="{{ route('cadastro-paciente', ['id' => $paciente['id']] ) }}">{{ $paciente['nome'] }}</a></li>
            <li><a href="">Excluir</a></li>
            <li><a href="">Editar</a></li>        
        </ul>
    @endforeach

</div>

@endsection