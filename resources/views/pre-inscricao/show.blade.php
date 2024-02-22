@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes da Pré-Inscrição</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $preInscricao->nome }}</h5>
            <p class="card-text">Email: {{ $preInscricao->email }}</p>
            <p class="card-text">Curso: {{ $preInscricao->curso->nome }}</p>
            <p class="card-text">Mensagem: {{ $preInscricao->mensagem }}</p>
            <a href="{{ route('pre-inscricao.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
