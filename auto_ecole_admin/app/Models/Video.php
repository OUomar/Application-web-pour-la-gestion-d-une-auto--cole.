<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   protected $table="videos";
   protected $fillable=[
    'video',
    'id_Serie',
    'titre',
  
];
// public function Serie(){
//     return $this->hasOne(Serie::class); 
// } 
}
