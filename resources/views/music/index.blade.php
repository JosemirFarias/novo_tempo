@extends('layouts.app')

@section('title', 'Página todas as músicas')

@section('content')

    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <script>
                // Fecha automaticamente após 3 segundos
                setTimeout(() => {
                    let alert = document.querySelector('.alert');
                    if (alert) {
                        let bsAlert = new bootstrap.Alert(alert);
                        bsAlert.close();
                    }
                }, 3000);
            </script>
        @endif

        <h2>Músicas</h2>

        <div class="mb-4">
            <a href="{{ route('music.create') }}"><button type="submit" class="btn btn-success">
                    <i class="bi bi-database-add"></i> Adicionar Nova Música
                </button>
            </a>
        </div>

        <table class="table table-striped text-center">

            <thead>
                <tr>
                    <th>Título</th>
                    <th>Banda</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($musics as $music)
                    <tr>
                        <td>{{ $music->title }}</td>
                        <td>{{ $music->version }}</td>

                        <td>
                            <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics']) }}"
                                class="btn btn-sm btn-primary">Ver Letra
                            </a>
                            <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics_notes']) }}"
                                class="btn btn-sm btn-secondary">Ver Cifra
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection
