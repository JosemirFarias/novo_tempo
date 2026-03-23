@extends('layouts.app')

@section('title', 'Membros')

@section('content')

    <div class="container mt-4">

        <form action="{{ route('escala.store') }}" method="POST">
            @csrf

            @for ($i = 1; $i <= 4; $i++)
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        Data #{{ $i }} da Escala
                    </div>
                    <div class="card-body">
                        <input type="date" name="datas[]" class="form-control mb-3" required>

                        <h6>Selecione os membros para esta data:</h6>
                        <div class="row">
                            @foreach ($users as $user)
                                <div class="col-md-3">
                                    <input type="checkbox" name="escala_data_{{ $i }}[]"
                                        value="{{ $user->id }}">
                                    {{ $user->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endfor

            <button type="submit" class="btn btn-success btn-lg">Publicar Escala Mensal</button>
        </form>

    </div>

@endsection
