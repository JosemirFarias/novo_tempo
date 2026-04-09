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

        @if (auth()->user()->role === 'lider' || auth()->user()->role === 'admin')
            <div class="d-flex justify-content-end align-items-center gap-2 mt-4">

                <a href="{{ route('warning.edit', $warning->id) }}" class="btn btn-warning">
                    <i class="bi bi-pencil"></i> Editar
                </a>

                <form action="{{ route('warning.destroy', $warning->id) }}" method="POST"
                    onsubmit="return confirm('Deseja excluir a mensagem?')" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="bi bi-trash3"></i> Excluir
                    </button>
                </form>

            </div>
        @endif
    </div>

@endsection
