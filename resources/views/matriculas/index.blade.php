@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Matrículas</h1>
    <a href="{{ route('matriculas.create') }}" class="btn btn-primary mb-2">Adicionar Nova Matrícula</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Curso</th>
                <th>Data da Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->id }}</td>
                    <td>{{ $matricula->aluno->nome }}</td>
                    <td>{{ $matricula->curso->nome }}</td>
                    <td>{{ $matricula->data_matricula ? \Carbon\Carbon::parse($matricula->data_matricula)->format('d/m/Y') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('matriculas.show', $matricula->id) }}" class="btn btn-info">Visualizar</a>
                        <a href="{{ route('matriculas.edit', $matricula->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('matriculas.destroy', $matricula->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem a certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
