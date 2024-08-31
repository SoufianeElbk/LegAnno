<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;

class AnnonceController extends Controller
{
    public function annonces_validees()
    {
        $annonces_validees = Annonce_legale::where('statut' , '=', 'validée')->with([
            'creation_sarl_sarlau_snc_scs_sca',
            'creation_societe_anonyme_simplifiee_sas',
            'creation_societe_anonyme_sa',
            'dissolution',
            'cloture_liquidation',
            'continuite_activite',
            'transfert_siege_social',
            'changement_objet_social',
            'changement_denomination',
            'transformation_forme_sociale',
            'reduction_capital',
            'augmentation_capital',
        ])->paginate(10);
        return view('admin.annonces-validees.index', compact('annonces_validees'));
    }

    public function annonces_annulees()
    {
        $annonces_annulees = Annonce_legale::where('statut' , '=', 'annulée')->with([
            'creation_sarl_sarlau_snc_scs_sca',
            'creation_societe_anonyme_simplifiee_sas',
            'creation_societe_anonyme_sa',
            'dissolution',
            'cloture_liquidation',
            'continuite_activite',
            'transfert_siege_social',
            'changement_objet_social',
            'changement_denomination',
            'transformation_forme_sociale',
            'reduction_capital',
            'augmentation_capital',
        ])->paginate(10);
        return view('admin.annonces-annulees.index', compact('annonces_annulees'));
    }

    public function annonces_en_attente() {
        $annonces_en_attente = Annonce_legale::where('statut' , '=', 'en attente de validation')->with([
            'creation_sarl_sarlau_snc_scs_sca',
            'creation_societe_anonyme_simplifiee_sas',
            'creation_societe_anonyme_sa',
            'dissolution',
            'cloture_liquidation',
            'continuite_activite',
            'transfert_siege_social',
            'changement_objet_social',
            'changement_denomination',
            'transformation_forme_sociale',
            'reduction_capital',
            'augmentation_capital',
        ])->paginate(10);
        return view('admin.annonces-en-attente.index', compact('annonces_en_attente'));
    }

    public function annonces_en_preparation() {
        $annonces_en_preparation = Annonce_legale::where('statut' , '=', 'en préparation')->with([
            'creation_sarl_sarlau_snc_scs_sca',
            'creation_societe_anonyme_simplifiee_sas',
            'creation_societe_anonyme_sa',
            'dissolution',
            'cloture_liquidation',
            'continuite_activite',
            'transfert_siege_social',
            'changement_objet_social',
            'changement_denomination',
            'transformation_forme_sociale',
            'reduction_capital',
            'augmentation_capital',
        ])->paginate(10);
        return view('admin.annonces-en-preparation.index', compact('annonces_en_preparation'));
    }

    public function index($id){
        $annonce = Annonce_legale::find($id);
        if($annonce){
                switch($annonce->num_type){
                    case 1 : {
                        $creation_sarl = $annonce->creation_sarl_sarlau_snc_scs_sca()->first();
                        $representants = $annonce->representants()->get();
                        $associes = $annonce->associes()->get();
                        $commissaires = $annonce->commissaires()->get();
                        return view('admin.annonce-legale')->with('Data', [
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
                        return view('admin.annonce-legale')->with('Data', [
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
                        return view('admin.annonce-legale')->with('Data', [
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
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'dissolution' => $dissolution,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 5 : {
                        $cloture_liquidation = $annonce->cloture_liquidation()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'cloture_liquidation' => $cloture_liquidation,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 6 : {
                        $continuite_activite = $annonce->continuite_activite()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'continuite_activite' => $continuite_activite,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 7 : {
                        $transfert_siege_social = $annonce->transfert_siege_social()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'transfert_siege_social' => $transfert_siege_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 8 : {
                        $changement_objet_social = $annonce->changement_objet_social()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'changement_objet_social' => $changement_objet_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 9 : {
                        $changement_denomination = $annonce->changement_denomination()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'changement_denomination' => $changement_denomination,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 10 : {
                        $transformation_forme_sociale = $annonce->transformation_forme_sociale()->first();
                        $representants = $annonce->representants()->get();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'transformation_forme_sociale' => $transformation_forme_sociale,
                        'representants' => $representants,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 11 : {
                        $reduction_capital = $annonce->reduction_capital()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'reduction_capital' => $reduction_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 12 : {
                        $augmentation_capital = $annonce->augmentation_capital()->first();
                        return view('admin.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'augmentation_capital' => $augmentation_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                }
            }
    }
}
