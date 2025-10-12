<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial de membros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="Logo" style="width: 80px;" class="rounded-circle">
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item position-relative ms-4"> <!-- Sino -->
                    <a class="nav-link" href="#">
                        <i class="bi bi-bell" style="font-size: 1.5rem;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                            <span class="visually-hidden">mensagens não lidas</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sair</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="main-layout">

        <!-- Barra lateral -->
        <aside class="sidebar">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Músicas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Letras</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cifras</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Escalas</a></li>
            </ul>
        </aside>

        <!-- Offcanvas sidebar (só em telas pequenas, aberto pelo botão acima) -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebarOffcanvas"
            aria-labelledby="sidebarOffcanvasLabel">
            <div class="offcanvas-header">
                <h4 id="sidebarOffcanvasLabel">Menu</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Músicas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Letras</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Cifras</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Escalas</a></li>
                </ul>
            </div>
        </div>

        <!-- Botão para abrir o menu lateral (só em telas pequenas) -->
        <button id="sidebarToggleBtn" class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebarOffcanvas" aria-controls="sidebarOffcanvas"
            style="position: fixed; top: 100px; left: 10px; z-index: 1050;">
            <i class="bi bi-list" style="font-size: 2rem;"></i>
        </button>

        <!-- Main Content -->
        <main class="main-content flex-grow-1">
            <div class="container">

                <h2 class="mb-4">Conteúdos</h2>

                <div class="row justify-content-center g-3">

                    <!-- Card 1 -->
                    <div class="col">
                        <a href="#" class="card card-link">
                            <div class="card shadow-sm border-0">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="/img/musica.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Músicas</h5>
                                    <p class="card-text">Lista com músicas em formato MP3</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 2 -->
                    <div class="col">
                        <a href="#" class="card card-link">
                            <div class="card shadow-sm border-0">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="/img/texto.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Letras</h5>
                                    <p class="card-text">Letras completas e adaptadas</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="col">
                        <a href="#" class="card card-link">
                            <div class="card shadow-sm border-0">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="/img/cifra.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Cifras</h5>
                                    <p class="card-text">Cifras completas e adaptadas</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- card 4 -->
                    <div class="col">
                        <a href="#" class="card card-link">
                            <div class="card shadow-sm border-0">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="/img/escala.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Escalas</h5>
                                    <p class="card-text">Visualizar histórico de escalas</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- card 5 -->
                    <div class="col">
                        <a href="#" class="card card-link">
                            <div class="card shadow-sm border-0">
                                <div class="card-img-container">
                                    <img class="card-img-top" src="/img/opiniao.png" alt="Card image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Sujestões</h5>
                                    <p class="card-text">Envie sua mensagem</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
