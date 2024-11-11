<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    // Un chauffeur peut conduire plusieurs voitures
    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
