@extends('layouts.app')

@section('title', 'Membros')

@section('content')

    <div class="container mt-4">

        <h2><i class="bi bi-chat-text"></i> Lista de Membros</h2>
        <hr class="main-divider">
        <br>

        @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
            <form action="{{ route('user.scale') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-database-add"></i> Salvar Selecionados
                    </button>
                </div>
        @endif

        <table class="table table-striped text-center">

            <thead>
                <tr>
                    <th>Selecionar</th>
                    <th>Nome</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <input type="checkbox" name="users[]" value="{{ $user->id }}">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>
                            <a href="" class="btn btn-outline-info btn-sm">Dados</a>
                            </details>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </form>
    </div>

@endsection
