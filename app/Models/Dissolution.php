<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dissolution extends Model
{
    use HasFactory;

    protected $table = 'Dissolution';

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'capital', 'adresse_societe', 'code_postal_societe', 'ville_societe',
        'civilite_liquidateur', 'nom_liquidateur', 'adresse_liquidateur', 'code_postal_liquidateur',
        'ville_liquidateur', 'raison_liquidation', 'limitation_apportes_aux_pouvoir_du_liquidateur',
        'adresse_liquidation', 'code_postal_liquidation', 'ville_liquidation'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
