<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Manager;
use App\Models\Pack;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function dashboard() {
        $users = User::latest('id')->take(5)->get();
        $managers = Manager::latest()->take(5)->get();
        $packs = Pack::latest('id')->take(5)->get();
        $packs_chart = DB::table('packs')
        ->join('commandes', 'packs.id', '=', 'commandes.pack_id')
        ->select('packs.nom as pack_name', DB::raw('count(commandes.id) as total_bought'))
        ->groupBy('packs.nom')
        ->get();
        return view('admin.dashboard', compact('users', 'managers', 'packs', 'packs_chart'));
    }


    public function create() {
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('admin.dashboard');
        }
        else return back()->with('error','Email ou mot de passe sont incorrects');
    }

    public function edit(Request $request) {
        return view('admin.profile', [
            'admin' => $request->user('admin'),
        ]);
    }

    public function updateInfo(Request $request) {
        // dd($request->all());
        $request->user('admin')->update($request->all());
        $request->user('admin')->save();
        return redirect()->route('admin.profile.edit')->with('success', 'Votre profile est modifié avec succées');
    }

    public function updatePassword(Request $request)
    {
        
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed'],
        ]);
        
        $request->user('admin')->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('admin.profile.edit')->with('success', 'Votre mot de passe est modifié avec succées');
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login.create');
    }
}
