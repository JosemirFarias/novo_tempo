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

Route::get('/nova_musica', [MusicController::class, 'create'])->name('music.create');
Route::get('/musicas', [MusicController::class, 'index'])->name('music.index');


// corrigir erro de rota para o menu lateral
// alternativa: retirar o sidebar do partials e colocar individualmente nas viwes leader e member
// assim cada link será direcionado para a rota da view correta.