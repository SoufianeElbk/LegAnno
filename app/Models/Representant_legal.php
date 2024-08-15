<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representant_legal extends Model
{
    use HasFactory;

    protected $table = 'representants_legaux';

    protected $fillable = [
        'qualite_representant', 'civilite_representant', 'nom_representant', 'adresse_representant',
        'code_postal_representant', 'ville_representant','participation_representant'
    ];

    public function Annonce_legale() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
