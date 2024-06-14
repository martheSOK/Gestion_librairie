<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'date_parution',
        'auteur',
        'nombre_page',
       
    ];

    public function lignecommandes(): HasMany {
        
        return $this->hasMany(LigneCommande::class);
    }

    public function ligneachats(): HasMany {
        
        return $this->hasMany(LigneAchat::class);
    }
}
