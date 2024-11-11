<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
     // Une voiture a un seul chauffeur
     public function chauffeur()
     {
         return $this->belongsTo(Chauffeur::class);
     }
 
     // Une voiture peut être associée à plusieurs navettes
     public function navettes()
     {
         return $this->hasMany(Navette::class);
     }
}
