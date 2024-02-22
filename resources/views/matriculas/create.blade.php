@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Associar Aluno a Curso</h2>
    <form method="POST" action="{{ route('matriculas.store') }}">
        @csrf
        <div class="form-group">
            <label for="aluno_id">Aluno:</label>
            <select class="form-control" id="aluno_id" name="aluno_id" required>
                @foreach($alunos as $aluno)
                <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="curso_id">Curso:</label>
            <select class="form-control" id="curso_id" name="curso_id" required>
                @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="data_matricula">Data da Matrícula:</label>
            <input type="date" class="form-control" id="data_matricula" name="data_matricula" required>
        </div>
        <button type="submit" class="btn btn-primary">Associar</button>
    </form>
</div>
@endsection
