@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Curso</h2>
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Curso</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $curso->nome }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required>{{ $curso->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Curso</button>
    </form>
</div>
@endsection
