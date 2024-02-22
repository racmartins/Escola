@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Contactos</h1>
    <a href="{{ route('contactos.create') }}" class="btn btn-primary mb-2">Adicionar Novo Contato</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
                <th>Ações</th> <!-- Coluna de Ações -->
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $contacto)
                <tr>
                    <td>{{ $contacto->id }}</td>
                    <td>{{ $contacto->nome }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>{{ $contacto->mensagem }}</td>
                    <td>
                        <form action="{{ route('contactos.destroy', $contacto->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem a certeza que deseja excluir este contacto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
