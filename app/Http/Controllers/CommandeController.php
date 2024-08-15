<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Auth;

class CommandeController extends Controller
{
    public function create() {
        return view('user.packs');
    }

    public function store(Request $request){
        $commande = Commande::create([
            'user_id' => Auth::id(),
            'pack_id' => $request->pack_id,
            'adresse_facturation' => $request->adresse_facturation,
            'mode_paiement' => $request->mode_paiement,
        ]);
        Auth::user()->increment('solde', 10);
        return redirect()->route('packs.create')->with('success', 'Commande has been created');
    }
}
