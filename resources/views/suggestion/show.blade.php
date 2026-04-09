@extends('layouts.app')

@section('title', 'sugestao')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4"><i class="bi bi-chat-text"></i> Sugestão</h2>
        <hr class="main-divider">

        <div class="mt-4">
            <h4>{{ $suggestions->subject }}</h4>
        </div>
        <pre>{{ $suggestions->content }}</pre>

        <div class="d-flex justify-content-end align-items-center gap-2 mt-4">

            <a href="{{ route('suggestion.index') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left"></i> Voltar</a>

            <a href="{{ route('suggestion.edit', $suggestions->id) }}" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Editar
            </a>

            <form action="{{ route('suggestion.destroy', $suggestions->id) }}" method="POST"
                onsubmit="return confirm('Deseja excluir a mensagem?')" class="m-0">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                    <i class="bi bi-trash3"></i> Excluir
                </button>
            </form>

        </div>
    </div>

@endsection
