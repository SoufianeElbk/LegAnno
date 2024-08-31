<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Annonce_legale;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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

    // public function approuver($id, Request $request){
    //     $annonce = Annonce_legale::find($id);

    //     $annonce->statut = 'validée';
    //     $annonce->manager_id = Auth::guard('manager')->id();

    //     $annonce->save();

    //     switch($annonce->num_type){
    //         case 1 : {
    //             $creation_sarl = $annonce->creation_sarl_sarlau_snc_scs_sca()->first();
    //             $representants = $annonce->representants()->get();
    //             $associes = $annonce->associes()->get();
    //             $commissaires = $annonce->commissaires()->get();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'creation_sarl' => $creation_sarl,
    //                 'representants' => $representants,
    //                 'associes' => $associes,
    //                 'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 2 : {
    //             $creation_sas = $annonce->creation_societe_anonyme_simplifiee_sas()->first();
    //             $representants = $annonce->representants()->get();
    //             $membres = $annonce->membres_organe_administration()->get();
    //             $commissaires = $annonce->commissaires()->get();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'creation_sas' => $creation_sas,
    //                 'representants' => $representants,
    //                 'membres' => $membres,
    //                 'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 3 : {
    //             $creation_sa = $annonce->creation_societe_anonyme_sa()->first();
    //             $representants = $annonce->representants()->get();
    //             $membres = $annonce->membres_organe_administration()->get();
    //             $commissaires = $annonce->commissaires()->get();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'creation_sa' => $creation_sa,
    //                 'representants' => $representants,
    //                 'membres' => $membres,
    //                 'commissaires' => $commissaires->count() != 0 ? $commissaires : null,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 4 : {
    //             $dissolution = $annonce->dissolution()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'dissolution' => $dissolution,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 5 : {
    //             $cloture_liquidation = $annonce->cloture_liquidation()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'cloture_liquidation' => $cloture_liquidation,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 6 : {
    //             $continuite_activite = $annonce->continuite_activite()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'continuite_activite' => $continuite_activite,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 7 : {
    //             $transfert_siege_social = $annonce->transfert_siege_social()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //             'transfert_siege_social' => $transfert_siege_social,
    //             'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 8 : {
    //             $changement_objet_social = $annonce->changement_objet_social()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //             'changement_objet_social' => $changement_objet_social,
    //             'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 9 : {
    //             $changement_denomination = $annonce->changement_denomination()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'changement_denomination' => $changement_denomination,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 10 : {
    //             $transformation_forme_sociale = $annonce->transformation_forme_sociale()->first();
    //             $representants = $annonce->representants()->get();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'transformation_forme_sociale' => $transformation_forme_sociale,
    //                 'representants' => $representants,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 11 : {
    //             $reduction_capital = $annonce->reduction_capital()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'reduction_capital' => $reduction_capital,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //         case 12 : {
    //             $augmentation_capital = $annonce->augmentation_capital()->first();
    //             $data = [
    //                 'annonce' => $annonce,
    //                 'augmentation_capital' => $augmentation_capital,
    //                 'type_annonce' => $annonce->num_type,
    //             ];
    //             $pdf = Pdf::loadView('pdf.annonce', $data);
    //         }
    //     }

    //     // Save the PDF to a file or return it as a response
    //     return $pdf->download('annonce.pdf');

    //     // return redirect()->route('manager.dashboard');
    // }

    public function approuver($id, Request $request) {
        $annonce = Annonce_legale::find($id);

        $annonce->statut = 'validée';
        $annonce->manager_id = Auth::guard('manager')->id();
        $annonce->date_validation = now();
        $annonce->date_publication = now();
        
        $annonce->save();

        $data = ['annonce' => $annonce, 'type_annonce' => $annonce->num_type];

        switch ($annonce->num_type) {
            case 1:
                $data['creation_sarl'] = $annonce->creation_sarl_sarlau_snc_scs_sca()->first();
                $data['representants'] = $annonce->representants()->get();
                $data['associes'] = $annonce->associes()->get();
                $data['commissaires'] = $annonce->commissaires()->get()->count() != 0 ? $annonce->commissaires()->get() : null;
                break;
            case 2:
                $data['creation_sas'] = $annonce->creation_societe_anonyme_simplifiee_sas()->first();
                $data['representants'] = $annonce->representants()->get();
                $data['membres'] = $annonce->membres_organe_administration()->get();
                $data['commissaires'] = $annonce->commissaires()->get()->count() != 0 ? $annonce->commissaires()->get() : null;
                break;
            case 3:
                $data['creation_sa'] = $annonce->creation_societe_anonyme_sa()->first();
                $data['representants'] = $annonce->representants()->get();
                $data['membres'] = $annonce->membres_organe_administration()->get();
                $data['commissaires'] = $annonce->commissaires()->get()->count() != 0 ? $annonce->commissaires()->get() : null;
                break;
            case 4:
                $data['dissolution'] = $annonce->dissolution()->first();
                break;
            case 5:
                $data['cloture_liquidation'] = $annonce->cloture_liquidation()->first();
                break;
            case 6:
                $data['continuite_activite'] = $annonce->continuite_activite()->first();
                break;
            case 7:
                $data['transfert_siege_social'] = $annonce->transfert_siege_social()->first();
                break;
            case 8:
                $data['changement_objet_social'] = $annonce->changement_objet_social()->first();
                break;
            case 9:
                $data['changement_denomination'] = $annonce->changement_denomination()->first();
                break;
            case 10:
                $data['transformation_forme_sociale'] = $annonce->transformation_forme_sociale()->first();
                $data['representants'] = $annonce->representants()->get();
                break;
            case 11:
                $data['reduction_capital'] = $annonce->reduction_capital()->first();
                break;
            case 12:
                $data['augmentation_capital'] = $annonce->augmentation_capital()->first();
                break;
        }

        $pdf = Pdf::loadView('pdf.annonce', $data);

        // Define the file path
        $fileName = 'annonce_' . $annonce->id . '.pdf';
        $filePath = public_path('annonces/' . $fileName);

        // Save the PDF to the specified directory
        $pdf->save($filePath);

        // Return the PDF as a download
        // return $pdf->download('annonce.pdf');

        // Alternatively, redirect to the manager dashboard
        return redirect()->route('manager.annonces-traitees')->with('message', 'L\'annonce légale '.$id.' est approuvée');
    }



    public function annuler($id, Request $request){
        $annonce = Annonce_legale::find($id);

        $annonce->statut = 'annulée';
        $annonce->manager_id = Auth::guard('manager')->id();

        $annonce->save();

        return redirect()->route('manager.annonces-traitees')->with('message', 'L\'annonce légale '.$id.' est annulée');
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
        ])->paginate(10);
        return view('manager.annonces-traitees', compact('annonces'));
    }

    public function annonces_en_attente() {
        $annonces = Annonce_legale::where('statut' , '=', 'en attente de validation')->with([
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
        return view('manager.annonces-en-attente', compact('annonces'));
    }
}
