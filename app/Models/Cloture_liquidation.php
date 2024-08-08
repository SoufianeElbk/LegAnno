<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloture_liquidation extends Model
{
    use HasFactory;

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'capital', 'adresse_societe', 'code_postal_societe', 'ville_societe',
        'civilite_liquidateur', 'nom_liquidateur', 'adresse_liquidateur', 'code_postal_liquidateur',
        'ville_liquidateur', 'raison_liquidation', 'limitation_apportes_aux_pouvoir_du_liquidateur'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
