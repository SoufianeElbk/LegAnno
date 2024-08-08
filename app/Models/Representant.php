<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representant extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_representant', 'civilite_representant', 'nom_representant','rc_representant', 'adresse_representant',
        'code_postal_representant', 'ville_representant','participation_representant'
    ];
}
