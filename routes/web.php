<?php

use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/membro', function () {
    return view('member.home');
});

Route::get('/lider', function () {
    return view('leader.home');
});

// Music routes
Route::get('/nova/musica', [MusicController::class, 'create'])->name('music.create');
Route::get('/musicas', [MusicController::class, 'index'])->name('music.index');
Route::post('/musica', [MusicController::class, 'store'])->name('music.store');
Route::get('/musica/{id}', [MusicController::class, 'show'])->name('music.show');
