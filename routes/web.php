<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MusicController;
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
Route::get('/nova/musica', [MusicController::class, 'create'])->name('music.create');
Route::get('/musicas', [MusicController::class, 'index'])->name('music.index');
Route::post('/musica', [MusicController::class, 'store'])->name('music.store');
Route::get('/musica/{id}', [MusicController::class, 'show'])->name('music.show');
Route::get('/letra/{id}/pdf', [MusicController::class, 'downloadLyricsPdf'])->name('music.pdf.lyrics');
Route::get('/cifra/{id}/pdf', [MusicController::class, 'downloadLyrics_notesPdf'])->name('music.pdf.lyrics_notes');
Route::post('/musicas/lista-semana', [MusicController::class, 'WeekList'])->name('music.WeekList');
