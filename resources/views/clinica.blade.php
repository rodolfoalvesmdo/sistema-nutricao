@extends('template')
	
@section('content')

<h1 class="welcome">Bem-vindo(a) ao ClinNutri, <span>{{ session('nome_usuario') }}</span>!</h1>

@endsection