<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{

    public function index(Request $request)
    {
        $q = trim($request->input('q', ''));

        $musics = Music::when($q !== '', function ($query) use ($q) {
            $term = '%' . $q . '%';
            $query->where('title', 'ILIKE', $term)
                ->orWhere('version', 'ILIKE', $term);
        })->orderBy('title')->get();

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

        return redirect()->route('music.index')->with('success', 'Música Adicionada!');
    }

    public function show(string $id)
    {
        $music = Music::findOrFail($id);
        $type = request()->query('type', 'lyrics');
        return view('music.show', compact('music', 'type'));
    }

    public function downloadLyricsPdf($id)
    {
        $music = Music::findOrFail($id);

        $pdf = Pdf::loadView('music.pdf', [
            'title' => $music->title,
            'version' => $music->version,
            'content' => $music->lyrics,
            'type' => 'Letra'
        ]);

        return $pdf->download("{$music->title}_letra.pdf");
    }

    public function downloadLyrics_notesPDF($id)
    {
        $music = Music::findOrFail($id);
        $pdf = Pdf::loadView('music.pdf', [
            'title' => $music->title,
            'version' => $music->version,
            'content' => $music->lyrics_notes,
            'type' => 'Cifra'
        ]);
        return $pdf->download("{$music->title}_cifra.pdf");
    }

    public function WeekList(Request $request)
    {
        // Desmarca todas primeiro
        Music::query()->update(['week_list' => false]);

        // Marca apenas as selecionadas
        $ids = $request->input('musics', []);
        Music::whereIn('id', $ids)->update(['week_list' => true]);

        return redirect()->back()->with('success', 'Lista da Semana Atualizada!');
    }

    public function edit(string $id)
    {
        $music = Music::findOrFail($id);
        return view('music.edit', compact('music'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'version' => 'required',
            'lyrics' => 'required',
            'lyrics_notes' => 'required',
        ]);

        $music = Music::findOrFail($id);
        $music->update($request->all());

        return redirect()->route('music.index')->with('success', 'Música Atualizada!');
    }

    public function destroy(string $id)
    {
        $music = Music::findOrFail($id);
        $music->delete();

        return redirect()->route('music.index')
            ->with('success', 'Música Excluida!');
    }
}
