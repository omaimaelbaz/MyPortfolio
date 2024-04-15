<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;
    protected $conection = 'mongodb';
    
    protected $fillable = [
        "poste",
        "entreprise",
        "lieu",
        "date_debut",
        "date_fin",
        "responsabilites",
    ];

}

