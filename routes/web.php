<?php

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
