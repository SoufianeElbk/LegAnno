<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre_organe_administration extends Model
{
    use HasFactory;

    protected $table = 'membres_organe_administration';

    protected $fillable = [
        'type_membre', 'civilite_membre', 'nom_membre','rc_membre', 'adresse_membre',
        'code_postal_membre', 'ville_membre','participation_membre'
    ];

    public function Annonce_legale() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
