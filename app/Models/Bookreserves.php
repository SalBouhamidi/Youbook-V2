<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookreserves extends Model
{
    public $timestamps = false;

    use HasFactory;
    protected $fillablepivot =[
        'user_id',
        'livres_id',
        'start_date',
        'end_date',
        'id'
    ];

public function users()
{
     return $this->belongsToMany(User::class,'user_id', 'id');
}

public function Livres()
{
    return $this->belongsToMany(Livres::class,'livres_id', 'id');
}

}
