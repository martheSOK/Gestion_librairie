<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneAchat extends Model
{
    use HasFactory;
    protected $fillabe=[
        'prix_unit_achat',
        'quantite',
        'montant_ligne_achat',
        'etat',
        'id_livres',
        'id_achats'
    ];
}
