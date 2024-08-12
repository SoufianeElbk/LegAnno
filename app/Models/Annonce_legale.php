<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce_legale extends Model
{
    use HasFactory;

    protected $table = 'Annonces_legales';

    protected $fillable = [
        'user_id', 'date_creation', 'date_publication', 'date_paiement', 'type_annonce', 'num_type', 'date_validation', 'statut', 'paiement',
        'tribunal', 'date_depot', 'numero_depot', 'numero_rc'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function representants()
    {
        return $this->hasMany(Representant_legal::class);
    }

    public function associes()
    {
        return $this->hasMany(Associe::class);
    }

    public function membres_organe_administration()
    {
        return $this->hasMany(Membre_organe_administration::class);
    }

    public function commissaires()
    {
        return $this->hasMany(Commissaire_aux_comptes::class);
    }

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function creation_sarl_sarlau_snc_scs_sca() {
        return $this->hasOne(Creation_sarl_sarlau_snc_scs_sca::class);
    }

    public function creation_societe_anonyme_simplifiee_sas() {
        return $this->hasOne(Creation_societe_anonyme_simplifiee_sas::class);
    }

    public function creation_societe_anonyme_sa() {
        return $this->hasOne(Creation_societe_anonyme_sa::class);
    }

    public function dissolution() {
        return $this->hasOne(Dissolution::class);
    }

    public function cloture_liquidation() {
        return $this->hasOne(Cloture_liquidation::class);
    }

    public function continuite_activite() {
        return $this->hasOne(Continuite_activite::class);
    }

    public function changement_objet_social() {
        return $this->hasOne(Changement_objet_social::class);
    }

    public function changement_denomination() {
        return $this->hasOne(Changement_denomination::class);
    }

    public function transformation_forme_sociale() {
        return $this->hasOne(Transformation_forme_sociale::class);
    }

    public function transfert_siege_social() {
        return $this->hasOne(Transfert_siege_social::class);
    }

    public function reduction_capital() {
        return $this->hasOne(Reduction_capital::class);
    }

    public function augmentation_capital() {
        return $this->hasOne(Augmentation_capital::class);
    }
}
