<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 982bc25 (controller employer,achat)

class Employer extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillabe=[
        'id_users',
        'status'

    ];
=======


    protected $fillable = [
        'statut',
        'user_id',
    ];

    public function user(): BelongsTo { 
        
        return $this->belongsTo(User::class);
    }


    public function achats(): HasMany {
        
        return $this->hasMany(Achat::class);
    }

    

>>>>>>> 982bc25 (controller employer,achat)
}
