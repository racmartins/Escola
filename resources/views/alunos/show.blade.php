@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informações do Aluno</h1>
    <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
    <p><strong>Email:</strong> {{ $aluno->email }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $aluno->data_nascimento }}</p>
    <p><strong>Documento:</strong> {{ $aluno->documento }}</p>
    <a href="{{ route('alunos.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection
