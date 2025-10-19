@extends('layouts.app')

@section('title', 'Página inicial de líderes')

@section('content')
    <div class="container">
        <h2 class="mb-4">Conteúdos</h2>
        <hr class="main-divider">
        <div class="row justify-content-center g-3">
            <!-- Card 1 -->
            <div class="col">
                <a href="{{ route('music.index') }}" class="card card-link">
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
                            <h5 class="card-title">Sugestões</h5>
                            <p class="card-text">Envie sua mensagem</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 6 -->
            <div class="col">
                <a href="#" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/camera.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Imagens</h5>
                            <p class="card-text">Momentos registrados</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
