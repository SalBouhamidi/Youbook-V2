<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable =[
        'nom',
        'auteur',
        'edition',
        'disponibilité',
        'description',
    ];
}
