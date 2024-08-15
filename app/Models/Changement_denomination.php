<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Changement_denomination extends Model
{
    use HasFactory;

    protected $table = 'changement_denomination';	

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'capital', 'adresse_societe', 'code_postal_societe', 'ville_societe', 'nv_denomination'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
