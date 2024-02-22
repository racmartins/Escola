<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Área Restrita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3"> <!-- Adicionado ms-3 para afastar do 'Área Restrita' -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alunos.index') }}">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cursos.index') }}">Cursos</a>
                </li>
                <li class="nav-item"> <!-- Nova opção adicionada -->
                    <a class="nav-link" href="{{ route('pre-inscricao.index') }}">Pré-Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matriculas.index') }}">Matrículas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactos.index') }}">Contactos</a>
                </li>
            </ul>
<ul class="navbar-nav ms-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Área do Utilizador</a>
    </li>
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link">Sair</button>
        </form>
    </li>
</ul>

            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="text-muted py-4 bg-light fixed-bottom">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Voltar ao topo</a>
            </p>
            <p class="mb-1">Área Restrita &copy; Este é o Seu Site.</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS e Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
