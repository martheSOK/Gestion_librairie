<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LigneCommande extends Model
{
    use HasFactory;
    protected $fillable = [
        'prix_unit_vente',
        'quantite',
        'montant_lignecommande',
        'livre_id',
        'commande_id',
    ];

    public function commande(): BelongsTo { 
        return $this->belongsTo(Commande::class);
    }

    public function livre(): BelongsTo { 
        return $this->belongsTo(Livre::class);
    }
    
}
