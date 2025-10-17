@extends('layouts.app')

@section('title', 'Página inicial músicas')

@section('content')

    <h2>Músicas</h2>

    <a href="{{ route('music.create') }}">Cadastrar músicas</a>

@endsection
