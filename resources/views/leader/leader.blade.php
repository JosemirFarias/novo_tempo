<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="d-flex">

        <!-- Conteúdo principal -->
        <main class="flex-grow-1 p-4 bg-light">
            <div class="container-fluid">
                <h2 class="mb-4">Conteúdos</h2>

                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                                style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title">Músicas</h5>
                                <p class="card-text">Lista com músicas em formato MP3</p>
                                <a href="#" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                                style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title">Letras</h5>
                                <p class="card-text">Letras completas e adaptadas</p>
                                <a href="#" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                                style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title">Cifras</h5>
                                <p class="card-text">Letras completas com todas as notas adaptadas</p>
                                <a href="#" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>

                    <!-- card 4 -->
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0">
                            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image"
                                style="width:100%">
                            <div class="card-body">
                                <h5 class="card-title">Escalas</h5>
                                <p class="card-text">Histórico de escalas</p>
                                <a href="#" class="btn btn-primary">Entrar</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

</body>

</html>
