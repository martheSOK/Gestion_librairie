<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LigneAchat extends Model
{
    use HasFactory;

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
    
}
