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

        <form action="{{ route('suggestion.destroy', $suggestions->id) }}" method="POST"
            onsubmit="return confirm('Deseja excluir a mensagem?')" class="m-0 mt-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-4">
                <i class="bi bi-trash3"></i> Excluir
            </button>
        </form>

        <a href="{{ route('suggestion.edit', $suggestions->id) }}"><button type="submit" class="btn btn-warning mt-4">
                <i class="bi bi-pencil"></i> Editar
            </button>
        </a>
    </div>

@endsection
