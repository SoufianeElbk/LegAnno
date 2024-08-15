<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associe extends Model
{
    use HasFactory;

    protected $fillable = [
        'civilite_associe', 'nom_associe', 'adresse_associe',
        'code_postal_associe', 'ville_associe','participation_associe'
    ];

    public function Annonce_legale() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
