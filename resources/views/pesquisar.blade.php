@extends('template')
@section('content')

<h2 class="pesquisar-pacientes-h2">Pesquisar Paciente</h2>

<div class="head-lista">
    <p>Nome</p>
</div>

<form action="{{ route('pesquisar') }}" method="get" class="busca">
@csrf
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar" name="keyword">
        <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>

@if(isset($keyword))
    <a href="{{ route('pesquisar') }}" class="clear-keyword">{{$keyword}}<i class="fas fa-times"></i></a>
@endif

<div class="lista-pacientes">

    @foreach($pacientes as $paciente)
        <ul>
            <li><a href="{{ route('cadastro-paciente', ['id' => $paciente['id']] ) }}">{{ $paciente['nome'] }}</a></li>
            <li>
                <a href="" data-toggle="modal" data-target="#exampleModal-{{$paciente['id']}}">Excluir <i class="fas fa-trash"></i></a>
                <div class="modal fade" id="exampleModal-{{$paciente['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tem certeza que deseja excluir esse cadastro?
                        </div>
                        <div class="modal-footer">
                            <a href="" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                            <a href="{{ route('excluir', ['id' => $paciente['id']] ) }}" class="btn btn-primary">Excluir</a>
                        </div>
                        </div>
                    </div>
                </div>

            </li>
            <li><a href="{{ route('edit-sc', ['id' => $paciente['id']] ) }}">Editar<i class="fas fa-user-edit"></i></a></li> 
            <li><a href="{{ route('consulta', ['id' => $paciente['id']] ) }}">Ficha Médica <i class="fas fa-file-medical"></i></a></li> 
            
            

        </ul>

        
    @endforeach

    

</div>

<div class="paginacao">
    {{ $paginacao }}
</div>

@endsection