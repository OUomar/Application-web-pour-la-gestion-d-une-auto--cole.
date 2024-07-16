<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moniteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_prenom',
        'user_name',
        'cin',
        'email',
        'adresse',
        'N_telephone',
        'date_naissance',
        'password',
        'image',
        'id_vehicule',
    ];
    public function moniteurs()
    {
        return $this->hasMany(Groupe::class);
    }
}
