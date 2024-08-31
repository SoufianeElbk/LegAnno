<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Auth;

class CommandeController extends Controller
{

    public function index() {
        $commandes = Commande::where('user_id', Auth::id())->with('pack')->paginate(10);
        return view('user.profile.packs-commandes', compact('commandes'));
    }

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

        $pdf = Pdf::loadView('pdf.commande', [
            'commande' => Commande::find($commande->id),
            'imagePath' => public_path('/images/logo1.png')
        ]);

        $fileName = 'commande_' . $commande->id . '.pdf';
        $filePath = public_path('commandes/' . $fileName);

        $pdf->save($filePath);


        return redirect()->route('packs.create')->with('success', 'La commande est passée avec succées');
    }
}
