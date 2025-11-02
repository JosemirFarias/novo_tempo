@extends('layouts.app')

@section('title', 'editar aviso')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4"><i class="bi bi-pencil"></i> Editar Aviso</h2>
        <hr class="main-divider">

        <form action="{{ route('warning.update', $warning->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $warning->title }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="20">{{ old('content', $warning->content ?? '') }}</textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Pulblicar Aviso
                </button>
            </div>
        </form>
    </div>

@endsection
