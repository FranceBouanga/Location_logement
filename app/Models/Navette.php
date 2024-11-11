<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navette extends Model
{
    // Une navette appartient à une voiture
    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }

    // Une navette peut être réservée par plusieurs étudiants
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }
}
