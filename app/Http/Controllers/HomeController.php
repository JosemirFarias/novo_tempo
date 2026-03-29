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

        $nextDate = \App\Models\Scale::where('date', '>=', now()->startOfDay())
            ->orderBy('date', 'asc')
            ->value('date');

        $nextScaleMembers = [];
        if ($nextDate) {
            $nextScaleMembers = \App\Models\Scale::with('user')
                ->where('date', $nextDate)
                ->get();
        }

        return view('home', compact('musicWeek', 'warnings', 'nextScaleMembers', 'nextDate'));
    }
}
