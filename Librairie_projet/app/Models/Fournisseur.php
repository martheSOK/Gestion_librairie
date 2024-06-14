<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fournisseur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'adresse',
        'contact',
        
    ];

    public function achats(): HasMany {
        
        return $this->hasMany(Achat::class);
    }
    
}
