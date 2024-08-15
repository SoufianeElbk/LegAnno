<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfert_siege_social extends Model
{
    use HasFactory;

    protected $table = 'transfert_siege_social';

    protected $fillable = [
        'organe_decision', 'date_decision', 'denomination', 'sigle', 'forme_sociale',
        'capital', 'adresse_societe', 'code_postal_societe', 'ville_societe',
        'nv_adresse', 'nv_code_postal', 'nv_ville'
    ];

    public function Annonce_legal() {
        return $this->belongsTo(Annonce_legale::class);
    }
}
