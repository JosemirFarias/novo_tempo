<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial de lideres</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="d-flex">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" alt="Logo" style="width: 40px;" class="rounded-circle">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content flex-grow-1">
            <div class="container">

                <h2 class="mb-4">Conteúdos</h2>

                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/musica.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Músicas</h5>
                                <p class="card-text">Lista com músicas em formato MP3</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/texto.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Letras</h5>
                                <p class="card-text">Letras completas e adaptadas</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/cifra.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cifras</h5>
                                <p class="card-text">Letras completas com todas as notas adaptadas</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- card 4 -->
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/escala.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Escalas</h5>
                                <p class="card-text">Visualizar histórico de escalas</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                    </div>

                    <!-- card 5 -->
                    <div class="col-md-3">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/opiniao.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Sujestões e Reclamações</h5>
                                <p class="card-text">Faça uma sujestão ou reclamação de forma anônima</p>
                                <a href="#" class="btn btn-primary">Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
