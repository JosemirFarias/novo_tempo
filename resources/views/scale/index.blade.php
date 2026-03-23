@extends('layouts.app')

@section('title', 'Membros')

@section('content')

    <div class="container mt-4">

        <h2>Escala do Mês</h2>

        @if ($escalados->isEmpty())
            <div class="alert alert-warning">Sem escala</div>
        @else
            <div class="row">
                @foreach ($escalados as $data => $membros)
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Dia {{ \Carbon\Carbon::parse($data)->format('d/m/Y') }}
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach ($membros as $membro)
                                    <li class="list-group-item">{{ $membro->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

@endsection
