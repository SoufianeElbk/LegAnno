<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;
use App\Models\Facture;
use Auth;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index_annonces_legales_paiement($id){
        $annonce = Annonce_legale::find($id);
        if($annonce){
            if ($annonce->user_id === Auth::id()){
                switch($annonce->num_type){
                    case 1 : {
                        $creation_sarl = $annonce->creation_sarl_sarlau_snc_scs_sca()->first();
                        $representants = $annonce->representants()->get();
                        $associes = $annonce->associes()->get();
                        $commissaires = $annonce->commissaires()->get();
                        return view('user.annonces-legales-paiement')->with('Data', [
                            'annonce' => $annonce,
                            'creation_sarl' => $creation_sarl,
                            'representants' => $representants,
                            'associes' => $associes,
                            'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
                            'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 2 : {
                        $creation_sas = $annonce->creation_societe_anonyme_simplifiee_sas()->first();
                        $representants = $annonce->representants()->get();
                        $membres = $annonce->membres_organe_administration()->get();
                        $commissaires = $annonce->commissaires()->get();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'creation_sas' => $creation_sas,
                        'representants' => $representants,
                        'membres' => $membres,
                        'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 3 : {
                        $creation_sa = $annonce->creation_societe_anonyme_sa()->first();
                        $representants = $annonce->representants()->get();
                        $membres = $annonce->membres_organe_administration()->get();
                        $commissaires = $annonce->commissaires()->get();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'creation_sa' => $creation_sa,
                        'representants' => $representants,
                        'membres' => $membres,
                        'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 4 : {
                        $dissolution = $annonce->dissolution()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'dissolution' => $dissolution,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 5 : {
                        $cloture_liquidation = $annonce->cloture_liquidation()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'cloture_liquidation' => $cloture_liquidation,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 6 : {
                        $continuite_activite = $annonce->continuite_activite()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'continuite_activite' => $continuite_activite,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 7 : {
                        $transfert_siege_social = $annonce->transfert_siege_social()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'transfert_siege_social' => $transfert_siege_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 8 : {
                        $changement_objet_social = $annonce->changement_objet_social()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'changement_objet_social' => $changement_objet_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 9 : {
                        $changement_denomination = $annonce->changement_denomination()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'changement_denomination' => $changement_denomination,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 10 : {
                        $transformation_forme_sociale = $annonce->transformation_forme_sociale()->first();
                        $representants = $annonce->representants()->get();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'transformation_forme_sociale' => $transformation_forme_sociale,
                        'representants' => $representants,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 11 : {
                        $reduction_capital = $annonce->reduction_capital()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'reduction_capital' => $reduction_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 12 : {
                        $augmentation_capital = $annonce->augmentation_capital()->first();
                        return view('user.annonces-legales-paiement')->with('Data', [
                        'annonce' => $annonce,
                        'augmentation_capital' => $augmentation_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                }
            }
            else return redirect('/');
        }
        else return redirect('/');
    }

    public function store_annonces_legales_paiement(Request $request){
        $annonce = Annonce_legale::find($request->annonce_id);

        $annonce->statut = 'en attente de validation';

        $annonce->save();

        $facture = Facture::create([
            'user_id' => $request->user()->id,
            'annonce_legale_id' => $request->annonce_id,
            'mode_paiement' => $request->mode_paiement,
            'adresse_facturation' => $request->adresse_facturation,
            'montant' => 150,
        ]);
        return redirect()->back();
    }
}
