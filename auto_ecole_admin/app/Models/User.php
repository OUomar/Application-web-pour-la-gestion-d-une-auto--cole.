<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nom_prenom',
        'user_name',
        'cin',
        'email',
        'adresse',
        'N_telephone',
        'date_naissance',
        'name_groupe',
        'Permis',
        'image',
        'password',

    ];
}
