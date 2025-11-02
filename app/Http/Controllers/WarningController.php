<?php

namespace App\Http\Controllers;

use App\Models\Warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warning.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Warning::create($request->all());

        return redirect()->route('leader.home')->with('success', 'Aviso Pulblicado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warning = Warning::findOrFail($id);
        return view('warning.show', compact('warning'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $warning = Warning::findOrFail($id);
        return view('warning.edit', compact('warning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $warning = Warning::findOrFail($id);
        $warning->update($request->all());

        return redirect()->route('leader.home')->with('success', 'Aviso Editado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $warning = Warning::findOrFail($id);
        $warning->delete();

        return redirect()->route('leader.home')->with('success', 'Aviso Excluído!');
    }
}
