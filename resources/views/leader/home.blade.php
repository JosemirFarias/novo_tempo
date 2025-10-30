@extends('layouts.app')

@section('title', 'Página inicial de líderes')

@section('content')
    <div class="container">
        <h2 class="mb-4"><i class="bi bi-body-text"></i> Conteúdos</h2>
        <hr class="main-divider">

        <div class="row mb-5">
            <div class="col-md-6 mb-4">
                <h4><i class="bi bi-music-note-beamed"></i> Lista de músicas da Semana</h4>

                <ul class="list-group mt-3">
                    @if ($musicWeek->isEmpty())
                        <li class="list-group-item text-muted text-center">Nenhuma música selecionada para esta semana.</li>
                    @else
                        @foreach ($musicWeek as $music)
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="border-left:none; border-right:none; border-radius:0; padding:10px 15px;">
                                <span>{{ $music->title }}</span>
                                <small class="text-muted">{{ $music->version }}</small>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="col-md-6 mb-4">
                <h4><i class="bi bi-megaphone"></i> Avisos</h4>
                <ul class="list-group mt-3">
                    @if ($warnings->isEmpty())
                        <li class="list-group-item text-muted text-center">
                            Nenhum aviso publicado ainda.
                        </li>
                    @else
                        @foreach ($warnings as $warning)
                            <li class="list-group-item"
                                style="border-left:none; border-right:none; border-radius:0; padding:10px 15px;">
                                <strong>{{ $warning->title }}</strong>
                                @if ($warning->content)
                                    <p class="mb-0 text-muted">{{ $warning->content }}</p>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('warning.create') }}"><button type="submit" class="btn btn-success">Criar
                            Aviso</button></a>
                </div>
            </div>

            <div class="col-md-6">
                <h4><i class="bi bi-list-ol"></i> Escala da Semana</h4>
                <ul class="list-group mt-3">
                    <li class="list-group-item"
                        style="border-left:none; border-right:none; border-radius:0; padding:10px 15px;">
                        Ensaio geral na sexta-feira às 19h.
                    </li>
                    <li class="list-group-item"
                        style="border-left:none; border-right:none; border-radius:0; padding:10px 15px;">
                        Reunião de líderes no domingo após o culto.
                    </li>
                    <li class="list-group-item"
                        style="border-left:none; border-right:none; border-radius:0; padding:10px 15px;">
                        Enviar sugestões de músicas até quinta-feira.
                    </li>
                </ul>
            </div>
        </div>

        <hr class="main-divider mb-5">

        <div class="row justify-content-center g-3">

            <!-- Card 1 -->
            <div class="col">
                <a href="{{ route('music.index') }}" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/musics.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Músicas</h5>
                            <p class="card-text">Lista de músicas com letras, cifras e áudio</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 2 -->
            <div class="col">
                <a href="#" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/scales.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Escala</h5>
                            <p class="card-text">Visualizar escala do mês atual</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 3 -->
            <div class="col">
                <a href="#" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/suggestions.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sugestões</h5>
                            <p class="card-text">Envie sua mensagem</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- card 4 -->
            <div class="col">
                <a href="#" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/photos.png" alt="Card image">
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
