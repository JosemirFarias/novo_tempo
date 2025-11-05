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

        <div class="mb-4">
            <a href="{{ route('music.create') }}"><button type="submit" class="btn btn-primary">
                    <i class="bi bi-database-add"></i> Adicionar Nova Música
                </button>
            </a>
        </div>

        <form action="{{ route('music.WeekList') }}" method="POST">
            @csrf

            <div class="mb-4">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-database-add"></i> Salvar Selecionadas
                </button>
            </div>

            <table class="table table-striped text-center">

                <thead>
                    <tr>
                        <th>Selecionar</th>
                        <th>Título</th>
                        <th>Versão</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($musics as $music)
                        <tr>
                            <td>
                                <input type="checkbox" name="musics[]" value="{{ $music->id }}">
                            </td>
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
                                        <a href="#" class="dropdown-item text-info"><i class="bi bi-play-fill"></i>
                                            Ouvir</a>
                                        <a href="{{ route('music.edit', $music->id) }}"
                                            class="dropdown-item text-warning"><i class="bi bi-pencil"></i>
                                            Editar</a>
                                    </div>
                                </details>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>

@endsection
