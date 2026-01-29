<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use App\Http\Requests\StoreMatkulRequest;
use App\Http\Requests\UpdateMatkulRequest;

class MatkulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matkuls = Matkul::latest()->get();
        return view('matkuls.index', compact('matkuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matkuls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMatkulRequest $request)
    {
        Matkul::create($request->validated());
        return redirect()->route('matkuls.index')->with('success', 'Matkul created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matkul $matkul)
    {
        return view('matkuls.show', compact('matkul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matkul $matkul)
    {
        return view('matkuls.edit', compact('matkul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatkulRequest $request, Matkul $matkul)
    {
        $matkul->update($request->validated());
        return redirect()->route('matkuls.index')->with('success', 'Matkul updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matkul $matkul)
    {
        $matkul->delete();
        return redirect()->route('matkuls.index')->with('success', 'Matkul deleted successfully.');
    }
}
