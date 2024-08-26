<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;
use Illuminate\Http\Request;
use Auth;

class AnnonceController extends Controller
{

    public function create($id){
        $annonce = Annonce_legale::find($id);
        // dd($annonce);
        if($annonce){
                switch($annonce->num_type){
                    case 1 : {
                        $creation_sarl = $annonce->creation_sarl_sarlau_snc_scs_sca()->first();
                        $representants = $annonce->representants()->get();
                        $associes = $annonce->associes()->get();
                        $commissaires = $annonce->commissaires()->get();
                        return view('manager.annonce-legale')->with('Data', [
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
                        return view('manager.annonce-legale')->with('Data', [
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
                        return view('manager.annonce-legale')->with('Data', [
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
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'dissolution' => $dissolution,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 5 : {
                        $cloture_liquidation = $annonce->cloture_liquidation()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'cloture_liquidation' => $cloture_liquidation,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 6 : {
                        $continuite_activite = $annonce->continuite_activite()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'continuite_activite' => $continuite_activite,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 7 : {
                        $transfert_siege_social = $annonce->transfert_siege_social()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'transfert_siege_social' => $transfert_siege_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 8 : {
                        $changement_objet_social = $annonce->changement_objet_social()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'changement_objet_social' => $changement_objet_social,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 9 : {
                        $changement_denomination = $annonce->changement_denomination()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'changement_denomination' => $changement_denomination,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 10 : {
                        $transformation_forme_sociale = $annonce->transformation_forme_sociale()->first();
                        $representants = $annonce->representants()->get();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'transformation_forme_sociale' => $transformation_forme_sociale,
                        'representants' => $representants,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 11 : {
                        $reduction_capital = $annonce->reduction_capital()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'reduction_capital' => $reduction_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                    case 12 : {
                        $augmentation_capital = $annonce->augmentation_capital()->first();
                        return view('manager.annonce-legale')->with('Data', [
                        'annonce' => $annonce,
                        'augmentation_capital' => $augmentation_capital,
                        'type_annonce' => $annonce->num_type,
                        ]);
                    }
                }
            }
            else return redirect('/');
    }

    public function store($id, Request $request){
        $annonce = Annonce_legale::find($id);

        $annonce->statut = $request->choix == 1 ? 'validée' : 'annulée';
        $annonce->manager_id = Auth::guard('manager')->id();

        $annonce->save();

        return redirect()->route('manager.dashboard');
    }

    public function annonces_traitees(){
        $annonces = Auth::guard('manager')->user()->annonces_legales()->with([
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
            'representants',
            'associes',
            'commissaires'
        ])->paginate(10);
        return view('manager.annonces-traitees', compact('annonces'));
    }
}
