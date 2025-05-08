<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;
use App\Models\Manager;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ManagerController extends Controller
{
    public function dashboard() {
        $annonces_en_attente = Annonce_legale::where('statut' , '=', 'en attente de validation')->latest()->take(5)->get();
        // return view('manager.dashboard', compact('annonces_en_attente'));

        $annonces_traitees = Auth::guard('manager')->user()->annonces_legales()->latest()->take(5)->get();

        return view('manager.dashboard', compact('annonces_en_attente', 'annonces_traitees'));
    }

    public function create()
    {
        return view('manager.login');
    }

    public function store(Request $request)
    {
        if(Auth::guard('manager')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('manager.dashboard');
        }
        else return back()->with('error','Email ou mot de passe sont incorrects');
    }


    public function show(Manager $manager)
    {
        return view('manager.show', compact('manager'));
    }


    public function edit(Request $request) {
        return view('manager.profile', [
            'manager' => $request->user('manager'),
        ]);
    }


    public function updateInfo(Request $request) {
        $request->user('manager')->update($request->all());
        // $request->user('manager')->fill($request->validated());
        $request->user('manager')->save();
        return redirect()->route('manager.profile.edit')->with('success', 'Votre profile est modifié avec succées');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);

        $request->user('manager')->update([
            'password' => Hash::make($validated['password']),
        ]);
        return redirect()->route('manager.profile.edit')->with('success', 'Votre mot de passe est modifié avec succées');
    }


    public function logout(Request $request) {
        Auth::guard('manager')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('manager.login.create');
    }
}
