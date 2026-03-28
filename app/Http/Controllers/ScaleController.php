<?php

namespace App\Http\Controllers;

use App\Models\Scale;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scales = Scale::with('user')
            ->orderBy('date', 'asc')
            ->get()
            ->groupBy('date');

        return view('scale.index', compact('scales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = \App\Models\User::all();

        return view('scale.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'datas' => 'required|array',
            'datas.*' => 'required|date',
            'equipe' => 'required|array'
        ]);

        try {
            DB::transaction(function () use ($request) {
                Scale::query()->delete();

                foreach ($request->datas as $index => $dateValue) {

                    if (isset($request->equipe[$index])) {

                        foreach ($request->equipe[$index] as $userId) {
                            Scale::create([
                                'user_id' => $userId,
                                'date'    => $dateValue
                            ]);
                        }
                    }
                }
            });

            return redirect()->route('scale.index')
                ->with('success', 'Escala do mês publicada com sucesso!');
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao salvar escala: ' . $e->getMessage());
        }
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
