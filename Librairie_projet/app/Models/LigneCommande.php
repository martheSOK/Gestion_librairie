<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 982bc25 (controller employer,achat)

class LigneCommande extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillabe=[
        'prix_unit_vente',
        'quantite',
        'montant_ligne_commande',
        'id_livres'
    ];
=======
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
    
>>>>>>> 982bc25 (controller employer,achat)
}
