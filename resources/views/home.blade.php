@extends('layouts.public')

@section('content')
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">Bem-vindo à Escola XYZ!</h1>
        <p class="lead">O nosso compromisso é oferecer educação de qualidade para todos.</p>
        <hr class="my-4">
        <p>Aceda aos nossos cursos e saiba mais sobre o que oferecemos.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('oferta') }}" role="button">Ver Cursos</a>
        <a class="btn btn-success btn-lg" href="{{ route('pre-inscricao.create') }}" role="button">Pré-inscrição nos Cursos</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2>Sobre Nós</h2>
            <p>Conheça mais sobre a nossa história, missão, visão e valores.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Contacto</h2>
            <p>Tem perguntas? Não hesite e contacte connosco.</p>
            <p><a class="btn btn-secondary" href="{{ route('contactos.create') }}" role="button">Entre em contacto &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Apoio ao Aluno</h2>
            <p>Oferecemos suporte completo para garantir o seu sucesso escolar.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Saiba mais &raquo;</a></p>
        </div>
    </div>
</div>
@endsection
