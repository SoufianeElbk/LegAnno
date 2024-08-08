<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissaire_aux_comptes extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_commissaire', 'civilite_commissaire', 'nom_commissaire','rc_commissaire', 'adresse_commissaire',
        'code_postal_commissaire', 'ville_commissaire','participation_commissaire'
    ];
}
