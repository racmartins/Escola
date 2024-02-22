@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pré-Inscrição</h1>
    <form action="{{ route('pre-inscricao.update', $preInscricao->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $preInscricao->nome }}" required>
        </div>
        <!-- Repita para os outros campos, como email, curso_id, mensagem -->
        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection
