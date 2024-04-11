<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'cne',
        'cin',
        'apogee',
        'filiere',
        'date_naissance',
        'annee',
        'actif',
    ];
}
