<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function create()
    {
        return view('music.create');
    }

    public function index()
    {
        return view('music.index');
    }
}
