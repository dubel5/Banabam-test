<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'categorie_noms',
    ];
    public function etablisssement()
    {
        return $this->hasMany(Etablissement::class,'categorie_id');
    }
}
