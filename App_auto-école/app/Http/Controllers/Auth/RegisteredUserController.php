<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Notifications\NewUserRegisterNotification;
class RegisteredUserController extends Controller
{

    public function create()
    {
        return view('user.auth.register');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom_prenom' => ['required', 'string', 'max:20'],
            'user_name' => ['required', 'string', 'max:15','min:6'],
            'cin' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'add' => ['required', 'string', 'max:15'],
            'n_tele' => ['required', 'string', 'max:15'],
            'date_n' => ['required', 'date', 'max:10'],
            'password' => ['required','min:8', Rules\Password::defaults()]
        ] , [

            'nom_prenom.required'=>'Le champ du Nom et Prénom est obligatoire.',
            'user_name.required'=>'Le champ du nom d\'utilisateur est obligatoire.',
            'cin.required'=>'Le champ du CIN est obligatoire.',
            'email.required'=>'Le champ du nom Email est obligatoire.',
            'add.required'=>'Le champ d\'adresse est obligatoire.',
            'n_tele.required'=>'Le champ du Numéro de téléphone est obligatoire.',
            'password.required'=>'Le champ du Mot de Passe est obligatoire.'
        ]);

        $user = User::create([
            'nom_prenom' => $request->nom_prenom,
            'user_name' => $request->user_name,
            'cin' => $request->cin,
            'email' => $request->email,
            'adresse' => $request->add,
            'N_telephone' => $request->n_tele,
            'date_naissance' => $request->date_n,
            'image'=>"storage/images/1670015272login.png",
            'Permis'=>'...',
            'name_groupe'=>'Groupe A',
            'password' => Hash::make($request->password),
        ]);
        $notification = User::first();
        #store notification info into notifications table
        $notification->notify(new NewUserRegisterNotification($user));

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
