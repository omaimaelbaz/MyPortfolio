<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;

class Formations extends Model
{
    use HasFactory;
    protected $conection = 'mongodb';
    protected $fillable = [
        "diplome",
        "etablissement",
        "lieu",
        "annee_obtention",
    ];
}
