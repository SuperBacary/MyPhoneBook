<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'civilite',
        'nom',
        'prenom',
        'rue',
        'code_postal',
        'ville' ,
        'numero' ,
        'email' ,
        'entreprise' ,
    ];
}
