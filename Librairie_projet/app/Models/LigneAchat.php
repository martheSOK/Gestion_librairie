<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 982bc25 (controller employer,achat)

class LigneAchat extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillabe=[
        'prix_unit_achat',
        'quantite',
        'montant_ligne_achat',
        'etat',
        'id_livres',
        'id_achats'
    ];
=======

    protected $fillable = [
        'prix_unit_achat',
        'quantite',
        'montant_ligneachat',
        'livre_id',
        'achat_id',
        'etat'
    ];

    public function achat(): BelongsTo { 
        return $this->belongsTo(Achat::class);
    }

    public function livre(): BelongsTo { 
        return $this->belongsTo(Livre::class);
    }
    
>>>>>>> 982bc25 (controller employer,achat)
}
