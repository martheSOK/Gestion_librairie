<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;
    protected $fillabe=[
        'prix_unit_vente',
        'quantite',
        'montant_ligne_commande',
        'id_livres'
    ];
}
