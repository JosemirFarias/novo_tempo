@extends('layouts.app')

@section('title', 'nova sugestão')

@section('content')

    <div class="container mt-4">
        <h2><i class="bi bi-chat-text"></i> Nova Sugestões</h2>
        <hr class="main-divider">

        <form action="{{ route('suggestion.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="subject" class="form-label">Assunto</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="20"></textarea>
            </div>

            <div class="mb-4">
                <a href="{{ route('suggestion.create') }}"><button type="submit" class="btn btn-success">
                        <i class="bi bi-envelope-check"></i> Enviar Sugestão
                    </button>
                </a>
            </div>
        </form>
    </div>

@endsection
