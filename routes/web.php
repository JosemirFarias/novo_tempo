<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarningController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\SuggestionController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas acessíveis por qualquer pessoa logada
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Home
    Route::get('/lider', [UserController::class, 'index'])->name('leader.home');

    // Warnings
    Route::get('/aviso/{id}', [WarningController::class, 'show'])->name('warning.show');

    // Musics
    Route::get('/musicas', [MusicController::class, 'index'])->name('music.index');
    Route::get('/musica/{id}', [MusicController::class, 'show'])->name('music.show');
    Route::get('/letra/{id}/pdf', [MusicController::class, 'downloadLyricsPdf'])->name('music.pdf.lyrics');
    Route::get('/cifra/{id}/pdf', [MusicController::class, 'downloadLyrics_notesPdf'])->name('music.pdf.lyrics_notes');
    Route::post('/musicas/lista-semana', [MusicController::class, 'WeekList'])->name('music.WeekList');

    // Suggestion
    Route::get('/sugestoes', [SuggestionController::class, 'index'])->name('suggestion.index');
    Route::get('/enviar/sugestao', [SuggestionController::class, 'create'])->name('suggestion.create');
    Route::post('/sugestao', [SuggestionController::class, 'store'])->name('suggestion.store');
    Route::get('/sugestao/{id}', [SuggestionController::class, 'show'])->name('suggestion.show');
    Route::get('/sugestao/{id}/editar', [SuggestionController::class, 'edit'])->name('suggestion.edit');
    Route::put('/sugestao/{id}', [SuggestionController::class, 'update'])->name('suggestion.update');
    Route::delete('/sugestao/{id}', [SuggestionController::class, 'destroy'])->name('suggestion.destroy');
});

// Rotas que SÓ o LIDER e o ADMIN podem ver
Route::middleware(['auth', 'role:lider'])->group(function () {

    // Warnings
    Route::get('/novo/aviso', [WarningController::class, 'create'])->name('warning.create');
    Route::post('/warning', [WarningController::class, 'store'])->name('warning.store');
    Route::get('/aviso/{id}/editar', [WarningController::class, 'edit'])->name('warning.edit');
    Route::put('/aviso/{id}', [WarningController::class, 'update'])->name('warning.update');
    Route::delete('/aviso/{id}', [WarningController::class, 'destroy'])->name('warning.destroy');

    // Musics
    Route::get('/nova/musica', [MusicController::class, 'create'])->name('music.create');
    Route::post('/musica', [MusicController::class, 'store'])->name('music.store');
    Route::get('/musica/{id}/editar', [MusicController::class, 'edit'])->name('music.edit');
    Route::put('/musica/{id}', [MusicController::class, 'update'])->name('music.update');
    Route::delete('/musica/{id}', [MusicController::class, 'destroy'])->name('music.destroy');
});

// Rotas que SÓ o ADMIN pode ver

require __DIR__ . '/auth.php';
