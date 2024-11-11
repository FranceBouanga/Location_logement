<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayeur extends Model
{
    //use HasFactory;
    // Un bailleur peut avoir plusieurs logements
    public function logements()
    {
        return $this->hasMany(Logement::class);
    }
}
