<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Clínica de Nutrição</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<header>
        <nav class="container navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('clinica') }}">ClinNutri</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <div class="nav-item dropdown menu-drop">
                        <a href="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('cadastrar-paciente') }}">Novo</a>
                            <a class="dropdown-item" href="{{ route('pesquisar') }}">Pesquisar</a>
                        </div>                        
                    </div>

                    <a class="nav-item nav-link" href="{{ route('consulta') }}">Consulta</a>
                    <a class="nav-item nav-link" href="{{ route('consulta') }}">Agendar</a>
                    <a class="nav-item nav-link" href="{{ route('consulta') }}">Ficha Médica</a>
                    <a class="nav-item nav-link logout" href="{{ route('logout') }}">Sair</a>
                </div>
            </div>
        </nav>
</header>

    <div class="container">
        @yield('content')
    </div>



    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>