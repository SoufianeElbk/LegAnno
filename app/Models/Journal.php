<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_publication'
    ];

    public function annonces_legales() {
        return $this->hasMany(Annonce_legale::class);
    }

}
