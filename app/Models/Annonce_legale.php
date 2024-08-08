<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce_legale extends Model
{
    use HasFactory;

    protected $table = 'Annonces_legales';

    protected $fillable = [
        'type_annonce', 'date_validation', 'statut', 'paiement',
        'tribunal', 'date_depot', 'numero_depot', 'numero_rc'
    ];

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
}
