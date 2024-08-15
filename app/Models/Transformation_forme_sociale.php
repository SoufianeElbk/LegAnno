<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transformation_forme_sociale extends Model
{
    use HasFactory;

    protected $table = 'transformation_forme_sociale';

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale','capital',
        'adresse_societe', 'code_postal_societe', 'ville_societe', 'nv_forme_sociale'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
    
}
