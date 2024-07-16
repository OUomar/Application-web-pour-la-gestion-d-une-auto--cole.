<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = [
        'Serie',
        'id_Permis',
    ];
    // public function Seriecour(){
    //     return $this->hasOne(Seriecour::class); 
    // }
    // public function Video(){
    //     return $this->belongsTo(Video::class, 'id_Serie', 'id');
    // }
}
