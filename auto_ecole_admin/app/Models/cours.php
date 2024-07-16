<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_groupe',
        'type',
        'dateCours',
        'nbreCours'
    ];
    public function cours(){
        return $this->hasOne(Groupe::class);
    }
}
