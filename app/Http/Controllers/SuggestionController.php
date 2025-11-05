<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suggestions = Suggestion::all();
        return view('suggestion.index', compact('suggestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suggestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Suggestion::create($request->all());
        return redirect()->route('suggestion.index')->with('success', 'Sugestão Enviada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suggestions = Suggestion::findOrFail($id);
        return view('suggestion.show', compact('suggestions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suggestions = Suggestion::findOrFail($id);
        return view('suggestion.edit', compact('suggestions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
        ]);

        $suggestions = Suggestion::findOrFail($id);
        $suggestions->update($request->all());

        return redirect()->route('suggestion.index')->with('success', 'Mensagem Editada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suggestions = Suggestion::findOrFail($id);
        $suggestions->delete();

        return redirect()->route('suggestion.index')->with('success', 'Mensagem Excluída!');
    }
}
