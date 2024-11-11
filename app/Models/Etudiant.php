<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    // Un étudiant peut avoir zéro ou un logement
    public function logement()
    {
        return $this->hasOne(Logement::class);
    }

    // Un étudiant peut réserver une ou zéro navette
    public function navettes()
    {
        return $this->belongsToMany(Navette::class);
    }
}
