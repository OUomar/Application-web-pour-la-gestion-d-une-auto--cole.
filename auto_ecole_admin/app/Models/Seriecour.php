<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerieCour extends Model
{
    use HasFactory;
    protected $table = 'seriecours';
    protected $fillable = [
        'Permis',
    ];
    // public function Serie(){
    //     return $this->belongsTo(Employee::class, 'id_Permis', 'id');
    // }
}
