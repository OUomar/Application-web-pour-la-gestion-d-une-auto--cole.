<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moniteur;
use App\Models\vehicule;
use Illuminate\Support\Facades\Hash;
class MoniteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $moniteur=Moniteur::all();
        $vehicule=vehicule::all();
        return view('gestion des moniteur.index',compact('moniteur','vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_prenom' => ['required', 'string', 'max:20'],
            'user_name' => ['required', 'string', 'max:15',],
            'cin' => ['required', 'string', ],
            'adresse' => ['required', 'string',],
            'N_telephone' => ['required', 'string', ],
            'email' => ['required', 'string', 'email', 'max:255', ],
            'date_naissance' => ['required', 'string', ],
            'password' => ['required',]
        ] , [

            'nom_prenom.required'=>'Le champ du Nom et Prénom est obligatoire.',
            'user_name.required'=>'Le champ du nom d\'utilisateur est obligatoire.',
            'cin.required'=>'Le champ du CIN est obligatoire.',
            'email.required'=>'Le champ du nom Email est obligatoire.',
            'add.required'=>'Le champ d\'adresse est obligatoire.',
            'n_tele.required'=>'Le champ du Numéro de téléphone est obligatoire.',
            'password.required'=>'Le champ du Mot de Passe est obligatoire.'
        ]);
        $input = $request->all();
        $fileName =$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $input["image"] = '/storage/'.$path;
        $input["password"] = Hash::make($request->password);
        Moniteur::create($input);
        return redirect(url('admin/moniteur'))->with('flash_message', 'moniteur Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moniteur = Moniteur::find($id);
        $vehicule=vehicule::where('id', '=', $moniteur->id_vehicule)->first();
        return view('gestion des moniteur.show',compact('moniteur','vehicule'));
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
        $moniteur = Moniteur::find($id);
        $vehicule=vehicule::where('id', '=', $moniteur->id_vehicule)->first();
        $vehicules=vehicule::all();
        return view('gestion des moniteur.edit',compact('moniteur','vehicule','vehicules'));
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
        $eleve=Moniteur::find($id);
        $input=$request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $input["image"] = '/storage/'.$path;
        $input["password"] = Hash::make($request->password);
        $eleve->update($input);
        return redirect(url('admin/moniteur'))->with('flash_message', 'moniteur Addedd!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Moniteur::destroy($id);
        return redirect('admin/moniteur')->with('flash_message', 'moniteur deleted!');
    }
}
