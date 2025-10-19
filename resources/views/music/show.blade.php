@extends('layouts.app')

@section('title', 'Detalhes da Música')

@section('content')
    <div class="container mt-4">
        <h2>{{ $music->title }} - {{ $music->version }}</h2>

        <!-- Exibir o conteúdo escolhido -->
        <div class="container mb-3">

            @if ($type === 'lyrics')
                <h4>Letra</h4>
                <pre>{{ $music->lyrics }}</pre>
            @elseif($type === 'lyrics_notes')
                <h4>Cifra</h4>
                <pre>{{ $music->lyrics_notes }}</pre>
            @endif

        </div>
    </div>
@endsection
