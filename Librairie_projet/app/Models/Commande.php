<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 982bc25 (controller employer,achat)

class Commande extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=[
        'montant',
        'date_commande',
        'id_clients'
    ];
=======
    

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
>>>>>>> 982bc25 (controller employer,achat)
}
