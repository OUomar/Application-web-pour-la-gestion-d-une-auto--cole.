<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_groupe',
        'id_moniteur',
    ];
    public function groupe()
{
    return $this->hasMany(cours::class);
}

public function groupes(){
    return $this->hasOne(Moniteur::class);
}


}
