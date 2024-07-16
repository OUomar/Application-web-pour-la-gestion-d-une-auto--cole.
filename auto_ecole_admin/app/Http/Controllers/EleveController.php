<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Notifications\NewUserRegisterNotification;
class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleve=User::all();
        $groupe=Groupe::all();
        return view ('gestion  des élèves.index',compact('eleve','groupe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestion  des élèves.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_prenom' => ['required', 'string', 'max:20'],
            'user_name' => ['required', 'string', 'max:15',],
            'cin' => ['required', 'string', ],
            'adresse' => ['required', 'string',],
            'N_telephone' => ['required', 'string', ],

            'email' => ['required', 'string', 'email', 'max:255', ],
            'name_groupe' => ['required', 'string', ],
            'date_naissance' => ['required', 'string', ],
            'password' => ['required',]
        ] , [

            'nom_prenom.required'=>'Le champ du Nom et Prénom est obligatoire.',
            'user_name.required'=>'Le champ du nom d\'utilisateur est obligatoire.',
            'cin.required'=>'Le champ du CIN est obligatoire.',
            'email.required'=>'Le champ du nom Email est obligatoire.',
            'add.required'=>'Le champ d\'adresse est obligatoire.',
            'n_tele.required'=>'Le champ du Numéro de téléphone est obligatoire.',
            'name_groupe.required'=>'Le champ du groupe est obligatoire.',
            'password.required'=>'Le champ du Mot de Passe est obligatoire.'
        ]);

        /* eleve::create([
            'nom_prenom' =>$request->nom_prenom,
            'user_name' => $request->user_name,
            'cin' => $request->cin,
            'adresse' => $request->add,
            'N_telephone' => $request->n_tele,
            'date_naissance' => $request->date_n,
            'groupe' => $request->groupe,
            'image' => "login.png",
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);*/
        $input = $request->all();
        $fileName =$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $input["image"] = '/storage/'.$path;
        $input["password"] = Hash::make($request->password);
       $user= User::create($input);
       
/*
        eleve::create([
        'nom_prenom' =>$request->nom_prenom,
            'user_name' => $request->user_name,
            'cin' => $request->cin,
            'adresse' => $request->adresse,
            'N_telephone' => $request->N_telephone,
            'date_naissance' => $request->date_naissance,
            'name_groupe' => $request->groupe,
            'image' => "login.png",
            'email' => $request->email,
            'name_groupe'=>$request->input('name_groupe'),
            'password' => Hash::make($request->password),
        'image' => "login.png",]);*/
        return redirect(url('admin/eleve'))->with('flash_message', 'eleve Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $eleve = User::find($id);
        return view('gestion  des élèves.show')->with('eleve', $eleve);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $groupe=Groupe::all();
        $eleve = User::find($id);
        return view('gestion  des élèves.edit',compact("eleve","groupe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $eleve=User::find($id);
        $input=$request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $input["image"] = '/storage/'.$path;
        $input["password"] = Hash::make($request->password);
        $eleve->update($input);
        return redirect(url('admin/eleve'))->with('flash_message', 'eleve Addedd!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('admin/eleve')->with('flash_message', 'User deleted!');
    }




}
