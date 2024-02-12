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
        'created_at',
        'updated_at',
    ];

    protected $fillablepivot =[];




    public function Bookreserves()
    {
        return $this->hasMany(Bookreserves::class,'user_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class,'livres_id', 'id');
    }





}
