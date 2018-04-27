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

    <div class="login">
    <form action="{{ route('login') }}" method="post">
    @csrf
        @if(session('erro'))
        <div class="alert alert-danger">
            <p><strong>Ops!</strong> {{session('erro')}}</p>
        </div>
        @endif
        
        <div class="form-group">
            <label for="campo-login">Login</label>
            <input type="text" class="form-control" name="login" id="campo-login" placeholder="Digite seu login">
        </div>
        <div class="form-group">
            <label for="campo-senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="campo-senha" placeholder="Digite sua senha">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>    

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>