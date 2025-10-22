<?php

namespace App\Http\Controllers;

use App\Models\Music;

class UserController extends Controller
{
    public function index()
    {
        $musicWeek = Music::where('week_list', true)->get();
        return view('leader.home', compact('musicWeek'));
    }
}
