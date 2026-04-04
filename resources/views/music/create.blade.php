@extends('layouts.app')

@section('title', 'Cadastrar música')

@section('content')

    <div class="container mt-4">
        <h2><i class="bi bi-database-add"></i> Adicionar Nova Música</h2>
        <hr class="main-divider">

        <form action="{{ route('music.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Título da Música</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="version" class="form-label">Nome do Grupo Musical</label>
                <input type="text" name="version" id="version" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="youtube_url" class="form-label">Link do YouTube</label>
                <input type="url" name="youtube_url" id="youtube_url" class="form-control"
                    placeholder="https://www.youtube.com/watch?v=...">
                <div class="form-text">Cole o link completo do vídeo ou áudio de referência.</div>
            </div>

            <div class="mb-3">
                <label for="lyrics" class="form-label">Letra da Música</label>
                <textarea name="lyrics" id="lyrics" class="form-control" rows="10" required></textarea>
            </div>

            <div class="mb-3">
                <label for="lyrics_notes" class="form-label">Letra da Música com Cifras</label>
                <textarea name="lyrics_notes" id="lyrics_notes" class="form-control" rows="10" required></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Salvar Música
                </button>
            </div>

        </form>
    </div>

@endsection
