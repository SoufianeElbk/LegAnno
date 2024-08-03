<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce_legale extends Model
{
    use HasFactory;

    protected $table = 'Annonces_legales';

    protected $fillable = [
        'tribunal', 'date_depot', 'numero_depot', 'numero_rc'
    ];

    public function creation_sarl_sarlau_snc_scs_sca()
    {
        return $this->hasOne(Creation_sarl_sarlau_snc_scs_sca::class);
    }

    public function representants()
    {
        return $this->hasMany(Representant::class);
    }

    public function associes()
    {
        return $this->hasMany(Associe::class);
    }

    public function commissaires()
    {
        return $this->hasMany(Commissaire_aux_comptes::class);
    }
}
