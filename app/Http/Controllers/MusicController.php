<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function index()
    {
        $musics = Music::all();
        return view('music.index', compact('musics'));
    }

    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'version' => 'required|string|max:255',
            'lyrics' => 'required|string',
            'lyrics_notes' => 'required|string',
        ]);

        Music::create($request->all());

        return redirect()->route('music.index')->with('success', 'Música adicionada');
    }

    public function show(string $id)
    {
        $music = Music::findOrFail($id);
        $type = request()->query('type', 'lyrics');
        return view('music.show', compact('music', 'type'));
    }
}
