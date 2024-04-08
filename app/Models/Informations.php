<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;


class Informations extends Model
{

    use HasFactory;
    protected $conection = 'mongodb';
    protected $fillable = [
        "nom",
        "prenom",
        "adresse",
        "telephone",
        "email"
    ];
}
