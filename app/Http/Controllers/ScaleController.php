<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca usuários que têm alguma data na coluna month_scale
        // Agrupa os resultados pela data para facilitar a exibição
        $selected = User::whereNotNull('month_scale')
            ->get()
            ->groupBy('month_scale'); // Agrupa por data

        return view('scale.index', compact('selected'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Resetar todos os usuários (limpa a escala anterior)
        User::query()->update(['month_scale' => null]);

        // 2. O request virá como um array onde a chave é a data e o valor são os IDs
        // Ex: escala['2026-03-03'] => [1, 5, 8]
        if ($request->has('escala')) {
            foreach ($request->escala as $data => $userIds) {
                User::whereIn('id', $userIds)
                    ->update(['month_scale' => $data]);
            }
        }

        return back()->with('success', 'Escala de 4 datas criada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
