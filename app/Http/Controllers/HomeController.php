<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Warning;

class HomeController extends Controller
{
    public function index()
    {
        $musicWeek = Music::where('week_list', true)->get();
        $warnings = Warning::latest()->get();

        return view('home', compact('musicWeek', 'warnings'));
    }
}
