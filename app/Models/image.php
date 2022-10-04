<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_noms',
    ];
    public function etablisssement()
    {
        return $this->hasMany(Etablissement::class, 'image_id');
    }
}
