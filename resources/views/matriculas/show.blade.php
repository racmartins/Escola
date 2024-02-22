@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Matrícula</h1>
    <ul>
        <li>Aluno: {{ $matricula->aluno->nome }}</li>
        <li>Curso: {{ $matricula->curso->nome }}</li>
        <li>Data da Matrícula: {{ $matricula->data_matricula }}</li>
    </ul>
    <a href="{{ route('matriculas.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
