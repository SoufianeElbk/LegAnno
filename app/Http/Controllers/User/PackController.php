<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pack;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packs = Pack::all();
        return view('packs.index', compact('packs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Pack::create($request->all());

        return redirect()->route('packs.index')->with('success', 'Pack created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pack = Pack::findOrFail($id);
        return view('packs.show', compact('pack'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pack = Pack::findOrFail($id);
        return view('packs.edit', compact('pack'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $pack = Pack::findOrFail($id);
        $pack->update($request->all());

        return redirect()->route('packs.index')
                         ->with('success', 'Pack updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pack = Pack::findOrFail($id);
        $pack->delete();

        return redirect()->route('packs.index')
                         ->with('success', 'Pack deleted successfully.');
    }
}
