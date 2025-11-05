@extends('layouts.app')

@section('title', 'editar aviso')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4"><i class="bi bi-pencil"></i> Editar Sugestão</h2>
        <hr class="main-divider">

        <form action="{{ route('suggestion.update', $suggestions->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="subject" class="form-label">Assunto</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ $suggestions->subject }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="20">{{ old('content', $suggestions->content ?? '') }}</textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Enviar Sugestão
                </button>
            </div>
        </form>
    </div>

@endsection
