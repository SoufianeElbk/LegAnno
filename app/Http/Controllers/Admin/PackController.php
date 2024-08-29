<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackController extends Controller
{
    public function index()
    {
        $packs = Pack::paginate(10);
        return view('admin.packs.index', compact('packs'));
    }

    public function create()
    {
        return view('admin.packs.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'nombre_annonces' => 'required|integer|min:0', 
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $timestamp = now()->format('YmdHis'); 
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $timestamp . '.' . $imageExtension; 
            $image->move(public_path('images/packs'), $imageName);
            $validatedData['image'] = $imageName;
        }


        $pack = Pack::create([
            'nom' => $validatedData['nom'],
            'prix' => $validatedData['prix'],
            'nombre_annonces' => $validatedData['nombre_annonces'],
            'image' => $validatedData['image'],
        ]);


        return redirect()->route('admin.packs.index')->with('success', 'Le pack est crée avec succée');
    }

    public function show(Pack $pack)
    {
        return view('admin.packs.show', compact('pack'));
    }

    public function edit(Pack $pack)
    {
        return view('admin.packs.edit', compact('pack'));
    }

    public function update(Request $request, Pack $pack)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required|numeric|min:0',
            'nombre_annonces' => 'required|integer|min:0', 
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            if ($pack->image && file_exists(public_path('images/packs/' . $pack->image))) {
                unlink(public_path('images/packs/' . $pack->image));
            }
    
            $image = $request->file('image');
            $timestamp = now()->format('YmdHis'); // Generate a timestamp
            $imageName = $timestamp . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/packs'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $pack->update([
            'nom' => $validatedData['nom'],
            'prix' => $validatedData['prix'],
            'nombre_annonces' => $validatedData['nombre_annonces'],
            'image' => $request->hasFile('image') ? $validatedData['image'] : $pack->image,
        ]);

        return redirect()->route('admin.packs.index')->with('success', 'Le pack est modifié avec succée.');
    }

    public function destroy(Pack $pack)
    {
        if ($pack->image && file_exists(public_path('images/packs/' . $pack->image))) {
            unlink(public_path('images/packs/' . $pack->image));
        }
        $pack->delete();
        return redirect()->route('admin.packs.index')->with('success', 'Le pack est supprimé avec succée');
    }
}
