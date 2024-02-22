@extends('layouts.public')

@section('content')
<div class="container">
    <h2>Pré-inscrição em Curso</h2>
    <form method="POST" action="{{ route('pre-inscricao.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="curso_id">Curso</label>
            <select class="form-control" id="curso_id" name="curso_id" required>
                @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Pré-inscrição</button>
    </form>
</div>
@endsection
