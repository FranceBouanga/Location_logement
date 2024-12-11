<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    // Un étudiant peut avoir zéro ou un logement
   /* public function logement()
    {
        return $this->hasOne(Logement::class);
    }

    // Un étudiant peut réserver une ou zéro navette
    public function navettes()
    {
        return $this->belongsToMany(Navette::class);
    }*/


    use HasFactory;

    protected $fillable = [
        'PreEtu',     // Prénom de l'étudiant
        'NomEtu',     // Nom de l'étudiant
        'EmailEtu',   // Email de l'étudiant
        'TelEtu',     // Téléphone de l'étudiant
        'SexEtu',
        'PaysResi',   // Pays de résidence de l'étudiant
    ];

}
