@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pré-Inscrições</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Curso</th>
                <th>Mensagem</th>
                <th>Ações</th> <!-- Coluna de Ações -->
            </tr>
        </thead>
        <tbody>
            @foreach($preInscricoes as $preInscricao)
                <tr>
                    <td>{{ $preInscricao->id }}</td>
                    <td>{{ $preInscricao->nome }}</td>
                    <td>{{ $preInscricao->email }}</td>
                    <td>{{ $preInscricao->curso->nome }}</td>
                    <td>{{ $preInscricao->mensagem }}</td>
                    <td>
                        <a href="{{ route('pre-inscricao.show', $preInscricao->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('pre-inscricao.edit', $preInscricao->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('pre-inscricao.destroy', $preInscricao->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem a certeza?')">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

