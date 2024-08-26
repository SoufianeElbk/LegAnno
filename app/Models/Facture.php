<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'annonce_legale_id', 'date_commande',
        'mode_paiement', 'adresse_facturation', 'montant'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function annonce_legale()
    {
        return $this->belongsTo(Annonce_legale::class);
    }
}
