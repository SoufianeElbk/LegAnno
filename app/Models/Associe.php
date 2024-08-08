<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associe extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_associe', 'civilite_associe', 'nom_associe','rc_associe', 'adresse_associe',
        'code_postal_associe', 'ville_associe','participation_associe'
    ];
}
