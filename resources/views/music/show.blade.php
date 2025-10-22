@extends('layouts.app')

@section('title', 'Detalhes da Música')

@section('content')
    <div class="container mt-4">
        <h2>{{ $music->title }} - {{ $music->version }}</h2>
        <hr class="main-divider">

        <!-- Exibir o conteúdo escolhido -->
        <div class="container mb-3">

            @if ($type === 'lyrics')
                <h4>Letra</h4>
                <div class="mb-2 text-end">
                    <a href="{{ route('music.pdf.lyrics', $music->id) }}" class="btn btn-danger">
                        <i class="bi bi-file-earmark-pdf"></i> Baixar PDF
                    </a>
                </div>
                <pre>{{ $music->lyrics }}</pre>
            @elseif($type === 'lyrics_notes')
                <h4>Cifra</h4>
                <div class="mb-2 text-end">
                    <a href="{{ route('music.pdf.lyrics_notes', $music->id) }}" class="btn btn-danger">
                        <i class="bi bi-file-earmark-pdf"></i> Baixar PDF
                    </a>
                </div>
                <pre>{{ $music->lyrics_notes }}</pre>
            @endif

        </div>
    </div>
@endsection
