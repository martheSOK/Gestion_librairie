<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 982bc25 (controller employer,achat)

class Fournisseur extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable =[
        'nom',
        'adresse',
        'contact'
    ];
=======
    
    protected $fillable = [
        'nom',
        'adresse',
        'contact',
        
    ];

    public function achats(): HasMany {
        
        return $this->hasMany(Achat::class);
    }
    
>>>>>>> 982bc25 (controller employer,achat)
}
