<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;
    protected $fillable=[
        'date_achat',
        'etat',
        'id_employers',
        'id_fournisseurs'
    ];
}
