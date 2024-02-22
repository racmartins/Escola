@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Criar Novo Curso</h2>
    <form method="POST" action="{{ route('cursos.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Curso:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
