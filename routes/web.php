<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\WarningController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/membro', function () {
    return view('member.home');
});

// User
Route::get('/lider', [UserController::class, 'index'])->name('leader.home');

// Music
Route::get('/musicas', [MusicController::class, 'index'])->name('music.index');
Route::get('/nova/musica', [MusicController::class, 'create'])->name('music.create');
Route::post('/musica', [MusicController::class, 'store'])->name('music.store');
Route::get('/musica/{id}', [MusicController::class, 'show'])->name('music.show');
Route::get('/letra/{id}/pdf', [MusicController::class, 'downloadLyricsPdf'])->name('music.pdf.lyrics');
Route::get('/cifra/{id}/pdf', [MusicController::class, 'downloadLyrics_notesPdf'])->name('music.pdf.lyrics_notes');
Route::post('/musicas/lista-semana', [MusicController::class, 'WeekList'])->name('music.WeekList');
Route::get('/musica/{id}/editar', [MusicController::class, 'edit'])->name('music.edit');
Route::put('/musica/{id}', [MusicController::class, 'update'])->name('music.update');
Route::delete('/musica/{id}', [MusicController::class, 'destroy'])->name('music.destroy');

// Warnings
Route::get('/novo/aviso', [WarningController::class, 'create'])->name('warning.create');
Route::post('/warning', [WarningController::class, 'store'])->name('warning.store');
Route::get('/aviso/{id}', [WarningController::class, 'show'])->name('warning.show');
Route::get('/aviso/{id}/editar', [WarningController::class, 'edit'])->name('warning.edit');
Route::put('/aviso/{id}', [WarningController::class, 'update'])->name('warning.update');
Route::delete('/aviso/{id}', [WarningController::class, 'destroy'])->name('warning.destroy');

// Suggestion
Route::get('/sugestoes', [SuggestionController::class, 'index'])->name('suggestion.index');
Route::get('/enviar/sugestao', [SuggestionController::class, 'create'])->name('suggestion.create');
Route::post('/sugestao', [SuggestionController::class, 'store'])->name('suggestion.store');
Route::get('/sugestao/{id}', [SuggestionController::class, 'show'])->name('suggestion.show');
Route::get('/sugestao/{id}/editar', [SuggestionController::class, 'edit'])->name('suggestion.edit');
Route::put('/sugestao/{id}', [SuggestionController::class, 'update'])->name('suggestion.update');
Route::delete('/sugestao/{id}', [SuggestionController::class, 'destroy'])->name('suggestion.destroy');
