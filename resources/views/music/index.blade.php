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
        <hr class="main-divider">

        <div class="mb-4">
            <a href="{{ route('music.create') }}"><button type="submit" class="btn btn-success">
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
                                <input type="checkbox" name="musics[]" value="{{ $music->id }}"
                                    {{ $music->week_list ? 'checked' : '' }}>
                            </td>
                            <td>{{ $music->title }}</td>
                            <td>{{ $music->version }}</td>

                            <td>
                                <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics']) }}"
                                    class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"></i> Ver Letra
                                </a>
                                <a href="{{ route('music.show', ['id' => $music->id, 'type' => 'lyrics_notes']) }}"
                                    class="btn btn-sm btn-secondary"><i class="bi bi-eye-fill"></i> Ver Cifra
                                </a>
                                <a href="#" class="btn btn-sm btn-info"><i class="bi bi-play-fill"></i> Ouvir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </form>

    </div>

@endsection
