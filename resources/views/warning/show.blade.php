@extends('layouts.app')

@section('title', 'aviso')

@section('content')

    <div class="container mt-4">
        <h2 class="mb-4"><i class="bi bi-megaphone"></i> Aviso</h2>
        <hr class="main-divider">

        <div class="mt-4">
            <h4>{{ $warning->title }}</h4>
        </div>
        <pre>{{ $warning->content }}</pre>

        <form action="{{ route('warning.destroy', $warning->id) }}" method="POST"
            onsubmit="return confirm('Deseja excluir este aviso?')" class="m-0 mt-1">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-4">
                <i class="bi bi-trash3"></i> Excluir
            </button>
        </form>

        <a href="{{ route('warning.edit', $warning->id) }}"><button type="submit" class="btn btn-warning mt-4">
                <i class="bi bi-pencil"></i> Editar
            </button>
        </a>
    </div>

@endsection
