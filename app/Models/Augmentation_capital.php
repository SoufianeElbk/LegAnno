<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Augmentation_capital extends Model
{
    use HasFactory;

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'adresse_societe', 'code_postal_societe', 'ville_societe',
        'organe_decision', 'montant_augmentation_capital_social', 'capital_social_avant_augmentation',
        'nouveau_capital_social', 'modalite_augmentation_capital', 'modalite_liberation_augmentation_capital', 'liberation'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
