<?php

namespace App\Http\Controllers;

use App\Models\Annonce_legale;
use App\Models\Facture;
use Auth;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index_annonces_legales_paiement($type_annonce, $id){
        $annonce = Annonce_legale::find($id);
        if ($annonce && $annonce->belongsTo(Auth::user()) && $type_annonce == $annonce->num_type){
            switch($type_annonce){
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
                        'type_annonce' => $type_annonce,
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
                    'type_annonce' => $type_annonce,
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
                    'type_annonce' => $type_annonce,
                    ]);
                }
                case 4 : {
                    $dissolution = $annonce->dissolution()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'dissolution' => $dissolution,
                    'type_annonce' => $type_annonce,
                    ]);
                }
                case 5 : {
                    $cloture_liquidation = $annonce->cloture_liquidation()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'cloture_liquidation' => $cloture_liquidation,
                    ]);
                }
                case 6 : {
                    $continuite_activite = $annonce->continuite_activite()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'continuite_activite' => $continuite_activite,
                    ]);
                }
                case 7 : {
                    $transfert_siege_social = $annonce->transfert_siege_social()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'transfert_siege_social' => $transfert_siege_social,
                    ]);
                }
                case 8 : {
                    $changement_objet_social = $annonce->changement_objet_social()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'changement_objet_social' => $changement_objet_social,
                    ]);
                }
                case 9 : {
                    $changement_denomination = $annonce->changement_denomination()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'changement_denomination' => $changement_denomination,
                    ]);
                }
                case 10 : {
                    $transformation_forme_sociale = $annonce->transformation_forme_sociale()->first();
                    $representants = $annonce->representants()->get();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'transformation_forme_sociale' => $transformation_forme_sociale,
                    'representants' => $representants,
                    ]);
                }
                case 11 : {
                    $reduction_capital = $annonce->reduction_capital()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'reduction_capital' => $reduction_capital,
                    ]);
                }
                case 12 : {
                    $augmentation_capital = $annonce->augmentation_capital()->first();
                    return view('user.annonces-legales-paiement')->with('Data', [
                    'annonce' => $annonce,
                    'augmentation_capital' => $augmentation_capital,
                    ]);
                }
                default : return redirect('/');
            }
        }
        else return redirect('/');
            
    }

    public function store_annonces_legales_paiement($id, Request $request){
        $facture = Facture::create([
            'user_id' => $request->user()->id, 
            'annonce_legale_id' => $id,
            'mode_paiement' => $request->mode_paiement, 
            'montant' => 150,
        ]);
    }
}
