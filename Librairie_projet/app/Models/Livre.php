<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 982bc25 (controller employer,achat)

class Livre extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=[
        'titre',
        'date_parution',
        'auteur',
        'nombre'
    ];

=======

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
>>>>>>> 982bc25 (controller employer,achat)
}
