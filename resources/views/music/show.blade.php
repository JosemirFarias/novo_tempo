@extends('layouts.app')

@section('title', 'Detalhes da Música')

@section('content')
    <div class="container mt-4">
        <h2>{{ $music->title }} - {{ $music->version }}</h2>
        <hr class="main-divider">

        <!-- Exibir o conteúdo escolhido -->
        <div class="mb-4">

            @if ($type === 'lyrics')
                <div class="mb-2 d-flex justify-content-between mt-4">
                    <h4 class="mb-0">Letra</h4>
                    <a href="{{ route('music.pdf.lyrics', $music->id) }}" class="btn btn-danger">
                        <i class="bi bi-file-earmark-pdf"></i> Baixar PDF
                    </a>
                </div>
                <pre>{{ $music->lyrics }}</pre>
            @elseif($type === 'lyrics_notes')
                <div class="mb-2 d-flex justify-content-between mt-4">
                    <h4 class="mb-0">Cifra</h4>
                    <a href="{{ route('music.pdf.lyrics_notes', $music->id) }}" class="btn btn-danger">
                        <i class="bi bi-file-earmark-pdf"></i> Baixar PDF
                    </a>
                </div>
                <pre>{{ $music->lyrics_notes }}</pre>
            @endif

        </div>

        <form action="{{ route('music.destroy', $music->id) }}" method="POST"
            onsubmit="return confirm('Deseja excluir essa música?')" class="m-0 mt-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="bi bi-trash3"></i> Excluir
            </button>
        </form>

    </div>
@endsection
