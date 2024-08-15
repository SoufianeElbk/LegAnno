<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changement_objet_social extends Model
{
    use HasFactory;

    protected $table = 'changement_objet_social';

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale', 'objet_social',
        'capital', 'adresse_societe', 'code_postal_societe', 'ville_societe', 'modification_objet_social'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
