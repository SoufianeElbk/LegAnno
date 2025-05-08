<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\Pack;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Auth;

class CommandeController extends Controller
{

    public function index() {
        $commandes = Commande::where('user_id', Auth::id())->paginate(10);
        return view('user.profile.packs-commandes', compact('commandes'));
    }

    public function create() {
        $packs = Pack::all();
        return view('user.packs', compact('packs'));
    }

    public function store(Request $request){
        $commande = Commande::create([
            'user_id' => Auth::id(),
            'pack_id' => $request->pack_id,
            'adresse_facturation' => $request->adresse_facturation,
            'mode_paiement' => $request->mode_paiement,
        ]);

        $request->user()->increment('solde', Pack::find($request->pack_id)->nombre_annonces);

        $pdf = Pdf::loadView('pdf.commande', [
            'commande' => Commande::find($commande->id),
            'imagePath' => public_path('/images/logo1.png')
        ]);

        $fileName = 'commande_' . $commande->id . '.pdf';
        $filePath = public_path('commandes/' . $fileName);

        $pdf->save($filePath);

        return redirect()->route('packs-commandes')->with('success', 'La commande est passée avec succées');
    }
}
