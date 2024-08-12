<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation_societe_anonyme_sa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nature_acte', 'date_acte', 'denomination', 'sigle', 'forme_sociale',
        'objet_social', 'capital', 'nombre_actions', 'valeur_nominale', 'montant_apports_en_numeraire',
        'description_apports', 'duree', 'adresse_societe', 'code_postal_societe',
        'ville_societe', 'organe_social_habilite', 'dispositions_statutaires', 'avantages'
    ];

    public function Annonce_legale()
    {
        return $this->belongsTo(Annonce_legale::class);
    }
}
