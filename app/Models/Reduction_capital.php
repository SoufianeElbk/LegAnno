<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reduction_capital extends Model
{
    use HasFactory;

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'adresse_societe', 'code_postal_societe', 'ville_societe', 'montant_reduction_capital_social',
        'capital_social_avant_reduction' ,'nouveau_capital_social', 'modalite_reduction_capital'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
