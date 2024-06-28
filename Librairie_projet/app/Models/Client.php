<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> 982bc25 (controller employer,achat)

class Client extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=[
        'id_users'
        
    ];
=======

    protected $fillable = [
        'user_id',
    ];

    public function user(): BelongsTo { 
        return $this->belongsTo(User::class);
    }

    public function commandes(): HasMany {
        
        return $this->hasMany(Commande::class);
    }



>>>>>>> 982bc25 (controller employer,achat)
}
