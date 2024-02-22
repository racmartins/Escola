@extends('layouts.public')

@section('content')
<div class="container">
    <h2>{{ $curso->nome }}</h2>
    <p>{{ $curso->descricao }}</p>
    <!-- Informações adicionais aqui, como duração, preço, etc. -->
</div>
@endsection
