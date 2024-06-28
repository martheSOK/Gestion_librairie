<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 982bc25 (controller employer,achat)

class Achat extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable=[
        'date_achat',
        'etat',
        'id_employers',
        'id_fournisseurs'
    ];
=======



     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date_achat',
        'montant_achat',
        'etat',
        'employer_id',
        'fournisseur_id',
        
    ];

    public function employer(): BelongsTo { 
        return $this->belongsTo(Employer::class);
    }

    public function fournisseur(): BelongsTo { 
        return $this->belongsTo(Fournisseur::class);
    }
>>>>>>> 982bc25 (controller employer,achat)
}
