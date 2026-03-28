@extends('layouts.app')

@section('title', 'Escalas do Mês')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Escalas do Mês</h2>

            @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
                <a href="{{ route('scale.create') }}" class="btn btn-primary">
                    <i class="bi bi-calendar-check"></i> Gerenciar Escalas
                </a>
            @endif

        </div>
        <hr class="main-divider">
        <br>

        @if ($scales->isEmpty())
            <div class="alert alert-info text-center shadow-sm">
                <h4 class="mb-0 py-3">Nenhuma escala disponível</h4>
            </div>
        @else
            {{-- Loop principal: Cada data gera um bloco com sua própria tabela --}}
            @foreach ($scales as $date => $members)
                <div class="mb-5">
                    <h4 class="text-primary mb-3">
                        <i class="bi bi-calendar3"></i>
                        Data: {{ \Carbon\Carbon::parse($date)->format('d/m/Y') }}
                    </h4>

                    <div class="table-responsive shadow-sm">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 50%">Nome</th>
                                    <th style="width: 50%">Função</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $item)
                                    <tr>
                                        <td>{{ $item->user->name }}</td>
                                        {{-- Altere 'function' para o nome da coluna real no seu banco --}}
                                        <td>---</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr class="main-divider"><br>
            @endforeach
        @endif
    </div>
@endsection
