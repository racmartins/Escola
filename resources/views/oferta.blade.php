@extends('layouts.public')

@section('content')
<div class="container">
    <h2>Cursos Oferta da Escola</h2>
    <a href="{{ route('cursos.create') }}" class="btn btn-success mb-3">Adicionar Novo Curso</a>
    <div class="row">
        @foreach($cursos as $curso)
        <div class="col-md-4 mb-4">
            <div class="card h-100"> <!-- Fazendo com que todos os cards tenham a mesma altura -->
                <div class="card-body d-flex flex-column"> <!-- Usando flex para alinhar itens -->
                    <h3 class="card-title">{{ $curso->nome }}</h3>
                    <p class="flex-grow-1">{{ Str::limit($curso->descricao, 100) }}</p> <!-- Flex-grow para descrição ocupar espaço disponível -->
                    <div class="mt-2"> <!-- Espaçamento entre os botões e o texto -->
                        <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-primary mb-1">Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
