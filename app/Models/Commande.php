<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $timetamp = 'false';

    protected $fillable = ['user_id', 'pack_id', 'date_commande', 'adresse_facturation', 'mode_paiement'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
