@extends('layouts.app')

@section('title', 'Página todas as músicas')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/music.css') }}">
@endsection

@section('content')

    <div class="container mt-4">

        <nav class="navbar">
            <div class="container-fluid">
                <h2><i class="bi bi-music-note-beamed"></i> Músicas</h2>
                <form class="d-flex" role="search" method="GET" action="{{ route('music.index') }}">
                    <input class="form-control me-2" type="search" name="q" placeholder="Buscar música"
                        aria-label="Search" value="{{ request('q') }}" style="border: 1px solid #000000" />
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </nav>
        <hr class="main-divider">
        <br>

        @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
            <div class="mb-4 d-flex gap-2">
                <a href="{{ route('music.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i> Adicionar Nova Música
                </a>

                <button type="submit" form="formWeekList" class="btn btn-success">
                    <i class="bi bi-check-all"></i> Salvar Selecionadas
                </button>
            </div>

            <form action="{{ route('music.WeekList') }}" method="POST" id="formWeekList">
                @csrf
        @endif

        <table class="table table-striped text-center">

            <thead>
                <tr>
                    @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
                        <th>Selecionar</th>
                    @endif
                    <th>Título</th>
                    <th>Versão</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musics as $music)
                    <tr>
                        @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
                            <td>
                                <input type="checkbox" name="musics[]" value="{{ $music->id }}">
                            </td>
                        @endif
                        <td>{{ $music->title }}</td>
                        <td>{{ $music->version }}</td>
                        <td>
                            <details class="menu-options">
                                <summary class="btn-menu">⋮</summary>
                                <div class="menu-card card shadow-sm p-2">
                                    <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics']) }}"
                                        class="dropdown-item text-primary"><i class="bi bi-file-text"></i> Ver Letra
                                    </a>
                                    <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics_notes']) }}"
                                        class="dropdown-item text-success"><i class="bi bi-music-note-list"></i> Ver
                                        Cifra
                                    </a>
                                    @if ($music->youtube_url)
                                        <a href="#" class="dropdown-item text-info"
                                            onclick="playYoutube('{{ $music->youtube_url }}')" data-bs-toggle="modal"
                                            data-bs-target="#youtubeModal">
                                            <i class="bi bi-play-fill"></i> Ouvir
                                        </a>
                                    @else
                                        <span class="dropdown-item text-muted" title="Sem link cadastrado">
                                            <i class="bi bi-play-slash"></i> Sem Áudio
                                        </span>
                                    @endif

                                    @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
                                        <a href="{{ route('music.edit', $music->id) }}"
                                            class="dropdown-item text-warning"><i class="bi bi-pencil"></i>
                                            Editar</a>
                                    @endif
                                </div>
                            </details>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </form>
    </div>

    <div class="modal fade" id="youtubeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="ratio ratio-16x9">
                        <iframe id="youtubeFrame" src="" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function playYoutube(url) {
            // Converte link normal em link de Embed
            let videoId = "";
            if (url.includes('v=')) {
                videoId = url.split('v=')[1].split('&')[0];
            } else if (url.includes('youtu.be/')) {
                videoId = url.split('youtu.be/')[1];
            }

            const embedUrl = "https://www.youtube.com/embed/" + videoId + "?autoplay=1";
            document.getElementById('youtubeFrame').src = embedUrl;
        }

        // Para o vídeo quando fechar o modal
        const myModalEl = document.getElementById('youtubeModal');
        myModalEl.addEventListener('hidden.bs.modal', function() {
            document.getElementById('youtubeFrame').src = "";
        });
    </script>

@endsection
