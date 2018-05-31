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
            <li>
                <a href="" data-toggle="modal" data-target="#exampleModal-{{$paciente['id']}}">Excluir</a>
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
            <li><a href="{{ route('edit-sc', ['id' => $paciente['id']] ) }}">Editar</a></li> 
            
            

        </ul>

        
    @endforeach

    

</div>

@endsection