@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Matrícula</h1>
    <form action="{{ route('matriculas.update', $matricula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="aluno_id" class="form-label">Aluno</label>
            <select id="aluno_id" name="aluno_id" class="form-control">
                @foreach($alunos as $aluno)
                    <option value="{{ $aluno->id }}" {{ $aluno->id == $matricula->aluno_id ? 'selected' : '' }}>{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select id="curso_id" name="curso_id" class="form-control">
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ $curso->id == $matricula->curso_id ? 'selected' : '' }}>{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="data_matricula" class="form-label">Data da Matrícula</label>
            <input type="date" class="form-control" id="data_matricula" name="data_matricula" value="{{ $matricula->data_matricula }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection
