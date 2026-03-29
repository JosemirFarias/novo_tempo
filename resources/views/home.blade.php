@extends('layouts.app')

@section('title', 'Página inicial')

@section('content')

    <div class="container">
        <h2 class="mb-4"><i class="bi bi-body-text"></i> Conteúdos</h2>
        <hr class="main-divider">

        <div class="row mb-5">

            <!-- Warning -->
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <h4 class="mb-0"><i class="bi bi-megaphone"></i> Avisos</h4>
                    @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
                        <a href="{{ route('warning.create') }}"><button type="button" class="btn btn-success">Criar
                                Aviso</button></a>
                    @endif
                </div>

                <div class="list-group mt-3">
                    @if ($warnings->isEmpty())
                        <a href="#" class="list-group-item list-group-item-action">Nenhum aviso publicado.</a>
                    @else
                        @foreach ($warnings as $warning)
                            <a href="{{ route('warning.show', $warning->id) }}"
                                class="list-group-item list-group-item-action">
                                <strong>{{ $warning->title }}</strong>
                                @if ($warning->content)
                                    <p class="mb-0 text-muted">{{ $warning->content }}</p>
                                @endif
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Week_music -->
            <div class="col-md-6 mb-4">
                <h4><i class="bi bi-music-note-beamed"></i> Lista de músicas da Semana</h4>

                <div class="list-group mt-3">
                    @if ($musicWeek->isEmpty())
                        <a href="#" class="list-group-item list-group-item-action">Nenhuma música publicada!</a>
                    @else
                        @foreach ($musicWeek as $music)
                            <a href="{{ route('music.index', '$music->id') }}"
                                class="list-group-item list-group-item-action d-flex justify-content-between">
                                <span>{{ $music->title }}</span>
                                <small class="text-muted">{{ $music->version }}</small>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- Week_scale -->
            <div class="col-md-6 mb-4">
                <h4><i class="bi bi-calendar-check"></i> Próxima Escala</h4>
                <div class="list-group mt-3 shadow-sm">
                    @if ($nextDate)
                        <div class="list-group-item bg-light">
                            <strong class="text-primary">
                                <i class="bi bi-calendar3"></i>
                                Data: {{ \Carbon\Carbon::parse($nextDate)->format('d/m/Y') }}
                            </strong>
                        </div>

                        @foreach ($nextScaleMembers as $item)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                {{-- Acessamos o relacionamento 'user' (singular) definido no seu Model --}}
                                <span>{{ $item->user->name }}</span>
                                <span class="badge bg-secondary rounded-pill">
                                    {{ $item->user->function ?? 'Membro' }}
                                </span>
                            </div>
                        @endforeach

                        <a href="{{ route('scale.index') }}"
                            class="list-group-item list-group-item-action text-center text-primary fw-bold">
                            Ver escala completa do mês
                        </a>
                    @else
                        <div class="list-group-item">
                            <p class="mb-0 text-muted">Nenhuma escala agendada para os próximos dias.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <hr class="main-divider mb-5">

        <div class="row justify-content-center g-3">

            <!-- Card Music -->
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

            <!-- Card Scale -->
            <div class="col">
                <a href="{{ route('scale.index') }}" class="card card-link">
                    <div class="card shadow-sm border-0">
                        <div class="card-img-container">
                            <img class="card-img-top" src="/img/scales.png" alt="Card image">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Escala do Mês</h5>
                            <p class="card-text">Visualizar escala do mês atual</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card Suggestion -->
            <div class="col">
                <a href="{{ route('suggestion.index') }}" class="card card-link">
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

            <!-- Card Image -->
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

            <!-- Card Member_List -->
            @if (auth()->user()->role === 'admin')
                <div class="col">
                    <a href="{{ route('user.index') }}" class="card card-link">
                        <div class="card shadow-sm border-0">
                            <div class="card-img-container">
                                <img class="card-img-top" src="/img/texts.png" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Lista de Membros</h5>
                                <p class="card-text">Gerenciamento de usuários</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection
