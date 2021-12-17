<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nom',
        'rue',
        'ville',
        'code_postal',
        'numero',
        'email',
    ];
    public function tout(){
        return $this->hasMany(Entreprise::class);
    }
}
