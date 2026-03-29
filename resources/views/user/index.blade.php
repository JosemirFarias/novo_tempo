@extends('layouts.app')

@section('title', 'Membros')

@section('content')

    <div class="container mt-4">
        <h2><i class="bi bi-people"></i> Lista de Membros</h2><br>
        <hr class="main-divider">
        <br>

        <table class="table table-bordered table-hover text-center">
            <thead class="table-light">
                <tr>
                    <th>Nome</th>
                    <th>Função</th> {{-- Adicionei a coluna para ficar mais completo --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    {{-- Adicionamos a classe 'user-row' e o atributo com a rota --}}
                    <tr class="user-row" data-href="{{ route('user.show', $user->id) }}" style="cursor: pointer;">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->function }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Script para fazer o redirecionamento --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('.user-row');

            rows.forEach(row => {
                row.addEventListener('click', function() {
                    // Pega a URL do atributo data-href e redireciona o navegador
                    window.location.href = this.dataset.href;
                });
            });
        });
    </script>

@endsection
