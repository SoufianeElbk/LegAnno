<?php

namespace App\Http\Controllers;

use App\Models\Annonce_legale;
use App\Models\Creation_sarl_sarlau_snc_scs_sca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{

    public function index(){
        return view('user.annonces-legales-constitution-sarl-sarlau-snc-scs-sca');
    }


    public function store(Request $request) {
        // Start a database transaction
        // DB::beginTransaction();

        // try {
            // Create the Annonce_legal record
            $annonce = Annonce_legale::create([
                'tribunal' => $request->tribunal,
                'date_depot' => $request->date_depot,
                'numero_depot' => $request->numero_depot,
                'numero_rc' => $request->numero_rc,
            ]);

            // Create the Creation_sarl_sarlau_snc_scs_sca record
            $creation = $annonce->creation_sarl_sarlau_snc_scs_sca()->create([
                'nature_acte' => $request->nature_acte,
                'date_acte' => $request->date_acte,
                'denomination' => $request->denomination,
                'sigle' => $request->sigle,
                'forme_sociale' => $request->forme_sociale,
                'objet_social' => $request->objet_social,
                'capital' => $request->capital,
                'valeur_nominale' => $request->valeur_nominale,
                'montant_apports_en_numeraire' => $request->montant_apports_en_numeraire,
                'description_apports' => $request->description_apports,
                'duree' => $request->duree,
                'adresse_societe' => $request->adresse_societe,
                'code_postal_societe' => $request->code_postal_societe,
                'ville_societe' => $request->ville_societe,
            ]);

            // // Handle the representants
            // foreach ($request->representants as $representantData) {
            //     $annonce->representants()->create($representantData);
            // }

            // // Handle the associes
            // foreach ($request->associes as $associeData) {
            //     $annonce->associes()->create($associeData);
            // }

            // // Handle the commissaires (if any)
            // if ($request->has('commissaires')) {
            //     foreach ($request->commissaires as $commissaireData) {
            //         $annonce->commissaires()->create($commissaireData);
            //     }
            // }

            // If everything is successful, commit the transaction
        //     DB::commit();

            return redirect()->route('annonces-legales-constitution-sarl-sarlau-snc-scs-sca')->with('success', 'Annonce créée avec succès');
        // } catch (\Exception $e) {
        //     // If there's an error, rollback the transaction
        //     DB::rollback();

        //     // You might want to log the error here
        //     \Log::error($e->getMessage());

        //     return redirect()->back()->with('error', 'Une erreur est survenue lors de la création de l\'annonce');
        // }
    }
}
