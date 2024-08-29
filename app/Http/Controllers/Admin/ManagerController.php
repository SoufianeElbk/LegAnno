<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    // Display a listing of the users
    public function index()
    {
        $managers = Manager::paginate(10);
        return view('admin.managers.index', compact('managers'));
    }

    // Show the form for creating a new user
    public function create()
    {
        return view('admin.managers.create');
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:managers',
            'password' => 'required|string',
        ]);

        $managers = Manager::create([
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('admin.managers.index')->with('success', 'Le manager est crée avec succée');
    }

    // Display the specified user
    public function show(Manager $manager)
    {
        return view('admin.managers.show', compact('manager'));
    }

    // Show the form for editing the specified user
    public function edit(Manager $manager)
    {
        return view('admin.managers.edit', compact('manager'));
    }

    // Update the specified user in storage
    public function update(Request $request, Manager $manager)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:managers,email,' . $manager->id,
            'password' => 'nullable|string|min:5',
        ]);

        $manager->update([
            'nom' => $validatedData['nom'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'] ? Hash::make($validatedData['password']) : $manager->password,
        ]);

        return redirect()->route('admin.managers.index')->with('success', 'Le manager est modifié avec succée.');
    }

    // Remove the specified user from storage
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect()->route('admin.managers.index')->with('success', 'Le manager est supprimé avec succée');
    }
}
