<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'etablissement_noms',
        'etablissement_adresse',
        'etablissement_contact',
        'categorie_id',
        'image_id',

    ];
    public function categorie()
    {
    return $this->belongsTo(Categorie::class,'categorie_id');
    }
    public function image()
    {
    return $this->belongsTo(image::class,'image_id');
    }

}
