<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation_sarl_sarlau_snc_scs_sca extends Model
{
    use HasFactory;

    protected $table = 'creation_sarl_sarlau_snc_scs_sca';
    public $timestamps = false;
    protected $fillable = [
        'nature_acte', 'date_acte', 'denomination', 'sigle', 'forme_sociale',
        'objet_social', 'capital', 'valeur_nominale', 'montant_apports_en_numeraire',
        'description_apports', 'duree', 'adresse_societe', 'code_postal_societe',
        'ville_societe'
    ];

    public function Annonce_legal()
    {
        return $this->belongsTo(Annonce_legale::class);
    }


}
