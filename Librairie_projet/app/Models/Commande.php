<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Commande extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'date_commande',
        'montant',
        'client_id',
        
        
    ];


    public function client(): BelongsTo { 
        
        return $this->belongsTo(Client::class);
    }
    

    public function lignecommandes(): HasMany {
        
        return $this->hasMany(LigneCommande::class);
    }
}
