<?php

namespace App\Http\Controllers;

use App\Models\Annonce_legale;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class AnnonceController extends Controller
{

    public function index_annonces_legales_constitution_sarl_sarlau_snc_scs_sca(){
        return view('user.annonces-legales-constitution-sarl-sarlau-snc-scs-sca');
    }

    public function index_annonces_legales_constitution_sas(){
        return view('user.annonces-legales-constitution-sas');
    }

    public function index_annonces_legales_constitution_sa(){
        return view('user.annonces-legales-constitution-sa');
    }

    public function index_annonces_legales_dissolution(){
        return view('user.annonces-legales-dissolution');
    }

    public function index_annonces_legales_cloture_de_la_liquidation(){
        return view('user.annonces-legales-cloture-de-la-liquidation');
    }

    public function index_annonces_legales_continuite_activite(){
        return view('user.annonces-legales-continuite-activite');
    }

    public function index_annonces_legales_transfert_siege_social(){
        return view('user.annonces-legales-transfert-de-siege-social');
    }

    public function index_annonces_legales_changement_objet_social(){
        return view('user.annonces-legales-changement-objet-social');
    }

    public function index_annonces_legales_changement_denomination(){
        return view('user.annonces-legales-changement-denomination');
    }

    public function index_annonces_legales_transformation_forme_sociale(){
        return view('user.annonces-legales-transformation-forme-sociale');
    }

    public function index_annonces_legales_reduction_capital(){
        return view('user.annonces-legales-reduction-de-capital');
    }

    public function index_annonces_legales_augmentation_capital(){
        return view('user.annonces-legales-augmentation-capital');
    }

    public function store_annonces_legales_constitution_sarl_sarlau_snc_scs_sca(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Constitution d\'une '.$request->forme_sociale,
            'num_type' => 1,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $creation_sarl_sarlau_snc_scs_sc =  $annonce->creation_sarl_sarlau_snc_scs_sca()->create([
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

        foreach ($request->representants as $representant) {
            $annonce->representants()->create($representant);
        }

        foreach ($request->associes as $associe) {
            $annonce->associes()->create($associe);
        }

        if ($request->has('commissaires')) {
            foreach ($request->commissaires as $commissaire) {
                $annonce->commissaires()->create($commissaire);
            }
        }
        return redirect()->route('annonces-legales-paiement', [1, $annonce->id])->with('success', 'Annonce crée avec succès');
    }

    public function store_annonces_legales_constitution_sas(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Constitution d\'une Société Anonyme Simplifiée',
            'num_type' => 2,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $creation_sas = $annonce->creation_societe_anonyme_simplifiee_sas()->create([
            'nature_acte' => $request->nature_acte,
            'date_acte' => $request->date_acte,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'objet_social' => $request->objet_social,
            'capital' => $request->capital,
            'nombre_actions' => $request->nombre_actions,
            'valeur_nominale' => $request->valeur_nominale,
            'montant_apports_en_numeraire' => $request->montant_apports_en_numeraire,
            'description_apports' => $request->description_apports,
            'duree' => $request->duree,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'organe_social_habilite' => $request->organe_social_habilite,
            'dispositions_statutaires' => $request->dispositions_statutaires,
            'avantages' => $request->avantages,
        ]);

        foreach ($request->representants as $representant) {
            $annonce->representants()->create($representant);
        }

        foreach ($request->membres as $membre) {
            $annonce->membres_organe_administration()->create($membre);
        }

        if ($request->has('commissaires')) {
            foreach ($request->commissaires as $commissaire) {
                $annonce->commissaires()->create($commissaire);
            }
        }

        // return redirect()->route('annonces-legales-constitution-sas')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [2, $annonce->id]);
    }

    public function store_annonces_legales_constitution_sa(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Constitution d\'une Société Anonyme',
            'num_type' => 3,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $creation_sa = $annonce->creation_societe_anonyme_sa()->create([
            'nature_acte' => $request->nature_acte,
            'date_acte' => $request->date_acte,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'objet_social' => $request->objet_social,
            'capital' => $request->capital,
            'nombre_actions' => $request->nombre_actions,
            'valeur_nominale' => $request->valeur_nominale,
            'montant_apports_en_numeraire' => $request->montant_apports_en_numeraire,
            'description_apports' => $request->description_apports,
            'duree' => $request->duree,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'organe_social_habilite' => $request->organe_social_habilite,
            'dispositions_statutaires' => $request->dispositions_statutaires,
            'avantages' => $request->avantages,
        ]);

        foreach ($request->representants as $representant) {
            $annonce->representants()->create($representant);
        }

        foreach ($request->membres as $membre) {
            $annonce->membres_organe_administration()->create($membre);
        }

        if ($request->has('commissaires')) {
            foreach ($request->commissaires as $commissaire) {
                $annonce->commissaires()->create($commissaire);
            }
        }

        // return redirect()->route('annonces-legales-constitution-sa')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [3, $annonce->id]);
    }

    public function store_annonces_legales_dissolution(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Dissolution',
            'num_type' => 4,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $dissolution = $annonce->dissolution()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'civilite_liquidateur' => $request->civilite_liquidateur,
            'nom_liquidateur' => $request->nom_liquidateur,
            'adresse_liquidateur' => $request->adresse_liquidateur,
            'code_postal_liquidateur' => $request->code_postal_liquidateur,
            'ville_liquidateur' => $request->ville_liquidateur,
            'raison_liquidation' => $request->raison_liquidation,
            'limitation_apportes_aux_pouvoir_du_liquidateur' => $request->limitation_apportes_aux_pouvoir_du_liquidateur,
            'adresse_liquidation' => $request->adresse_liquidation,
            'code_postal_liquidation' => $request->code_postal_liquidation,
            'ville_liquidation' => $request->ville_liquidation,
        ]);

        // return redirect()->route('annonces-legales-dissolution')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [4, $annonce->id]);
    }

    public function store_annonces_legales_cloture_de_la_liquidation(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Clôture de la liquidation',
            'num_type' => 5,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $cloture_liquidation = $annonce->cloture_liquidation()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'civilite_liquidateur' => $request->civilite_liquidateur,
            'nom_liquidateur' => $request->nom_liquidateur,
            'adresse_liquidateur' => $request->adresse_liquidateur,
            'code_postal_liquidateur' => $request->code_postal_liquidateur,
            'ville_liquidateur' => $request->ville_liquidateur,
            'raison_liquidation' => $request->raison_liquidation,
            'limitation_apportes_aux_pouvoir_du_liquidateur' => $request->limitation_apportes_aux_pouvoir_du_liquidateur,
        ]);

        // return redirect()->route('annonces-legales-cloture-de-la-liquidation')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [5, $annonce->id]);
    }

    public function store_annonces_legales_continuite_activite(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Continuité de l\'activité',
            'num_type' => 6,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $continuite_activite = $annonce->continuite_activite()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
        ]);

        return redirect()->route('annonces-legales-paiement', [6, $annonce->id])->with('success', 'Annonce crée avec succès');
    }

    public function store_annonces_legales_transfert_siege_social(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Transfert de siège social',
            'num_type' => 7,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $transfert_siege_social = $annonce->transfert_siege_social()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'nv_adresse' => $request->nv_adresse,
            'nv_code_postal' => $request->nv_code_postal,
            'nv_ville' => $request->nv_ville,
        ]);

        // return redirect()->route('annonces-legales-transfert-de-siege-social')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [7, $annonce->id]);
    }

    public function store_annonces_legales_changement_objet_social(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Changement d\'objet social',
            'num_type' => 8,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $changement_objet_social = $annonce->changement_objet_social()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'objet_social' => $request->objet_social,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'modification_objet_social' => $request->modification_objet_social,
        ]);

        // return redirect()->route('annonces-legales-changement-objet-social')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [8, $annonce->id]);
    }

    public function store_annonces_legales_changement_denomination(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Changement de dénomination',
            'num_type' => 9,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $changement_denomination = $annonce->changement_denomination()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'nv_denomination' => $request->nv_denomination,
        ]);

        // return redirect()->route('annonces-legales-changement-denomination')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [9, $annonce->id]);
    }

    public function store_annonces_legales_transformation_forme_sociale(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Transformation de la forme sociale',
            'num_type' => 10,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $transformation_forme_sociale = $annonce->transformation_forme_sociale()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'nv_forme_sociale' => $request->nv_forme_sociale,
        ]);

        foreach ($request->representants as $representant) {
            $annonce->representants()->create($representant);
        }

        // return redirect()->route('annonces-legales-transformation-forme-sociale')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [10, $annonce->id]);
    }

    public function store_annonces_legales_reduction_capital(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Réduction de capital',
            'num_type' => 11,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $reduction_capital = $annonce->reduction_capital()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'montant_reduction_capital_social' => $request->montant_reduction_capital_social,
            'capital_social_avant_reduction' => $request->capital_social_avant_reduction,
            'nouveau_capital_social' => $request->nouveau_capital_social,
            'modalite_reduction_capital' => $request->modalite_reduction_capital,
        ]);

        // return redirect()->route('annonces-legales-reduction-de-capital')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [11, $annonce->id]);
    }

    public function store_annonces_legales_augmentation_capital(Request $request) {
        $annonce = Annonce_legale::create([
            'user_id' => Auth::user()->id,
            'type_annonce' => 'Augmentation de capital',
            'num_type' => 12,
            'tribunal' => $request->tribunal,
            'date_depot' => $request->date_depot,
            'numero_depot' => $request->numero_depot,
            'numero_rc' => $request->numero_rc,
        ]);
        $augmentation_capital = $annonce->augmentation_capital()->create([
            'organe_decision' => $request->organe_decision,
            'date_decision' => $request->date_decision,
            'denomination' => $request->denomination,
            'sigle' => $request->sigle,
            'forme_sociale' => $request->forme_sociale,
            'capital' => $request->capital,
            'adresse_societe' => $request->adresse_societe,
            'code_postal_societe' => $request->code_postal_societe,
            'ville_societe' => $request->ville_societe,
            'montant_augmentation_capital_social' => $request->montant_augmentation_capital_social,
            'capital_social_avant_augmentation' => $request->capital_social_avant_augmentation,
            'nouveau_capital_social' => $request->nouveau_capital_social,
            'modalite_augmentation_capital' => $request->modalite_augmentation_capital,
            'modalite_liberation_augmentation_capital' => $request->modalite_liberation_augmentation_capital,
            'liberation' => $request->liberation,

        ]);

        // return redirect()->route('annonces-legales-augmentation-de-capital')->with('success', 'Annonce crée avec succès');
        return redirect()->route('annonces-legales-paiement', [12, $annonce->id]);
    }

    public function index(Request $request) {
        $annonces = Auth::user()->annonces_legales()->with([
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
        ])->get();
        return view('user.mes-annonces', compact('annonces'));
    }

    public function create() {
        return view('user.mes-annonces');
    }


}
