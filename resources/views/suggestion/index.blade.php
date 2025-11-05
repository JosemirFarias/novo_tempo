@extends('layouts.app')

@section('title', 'sugestoes')

@section('content')

    <div class="container mt-4">
        <h2><i class="bi bi-chat-text"></i> Sugestões</h2>
        <hr class="main-divider">

        <div class="list-group mt-3">

            <div class="mt-4">
                <a href="{{ route('suggestion.create') }}"><button type="submit" class="btn btn-primary">
                        <i class="bi bi-envelope-plus"></i> Nova Sugestão
                    </button>
                </a>
            </div>

            <div class="mt-4" style="border-radius: 10px">
                @if ($suggestions->isEmpty())
                    <a href="#" class="list-group-item list-group-item-action">Sem sugestões.</a>
                @else
                    @foreach ($suggestions as $suggestion)
                        <a href="{{ route('suggestion.show', $suggestion->id) }}"
                            class="list-group-item list-group-item-action">
                            <strong>{{ $suggestion->subject }}</strong>
                            @if ($suggestion->content)
                                <p class="mb-0 text-muted">{{ $suggestion->content }}</p>
                            @endif
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>


@endsection
