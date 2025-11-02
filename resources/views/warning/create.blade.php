@extends('layouts.app')

@section('title', 'Avisos')

@section('content')

    <div class="container mt-4">
        <h2><i class="bi bi-megaphone"></i> Criar Aviso</h2>
        <hr class="main-divider">

        <form action="{{ route('warning.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="20"></textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Pulblicar Aviso
                </button>
            </div>
        </form>
    </div>

@endsection
