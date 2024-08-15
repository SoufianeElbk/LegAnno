<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissaire_aux_comptes extends Model
{
    use HasFactory;

    protected $table = 'Commissaires_aux_comptes';

    protected $fillable = [
        'civilite_commissaire', 'nom_commissaire', 'adresse_commissaire',
        'code_postal_commissaire', 'ville_commissaire','participation_commissaire'
    ];

    public function Annonce_legale() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
