@extends('layouts.app')

@section('title', 'Membros')

@section('content')

    <div class="container mt-4">

        <div class="d-flex justify-content-between mb-4">
            <h2><i class="bi bi-chat-text"></i> Informações </h2>

            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Tem certeza?')">
                    <i class="bi bi-trash3"></i> Deletar Membro
                </button>
            </form>

        </div>
        <hr class="main-divider">
        <br>

        <ul class="list-group">
            <li class="list-group-item"><strong>Nome:</strong> {{ $user->name }}</li>
            <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
            <li class="list-group-item"><strong>Função</strong> {{ $user->function }}</li>
        </ul><br>


        <a href="{{ route('user.index') }}" class="btn btn-secondary">Voltar para a Lista</a>


    </div>
@endsection
