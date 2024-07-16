<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Moniteur;
use App\Models\vehicule;

class ProfileMoniteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("moniteur.Profil.index");
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $moniteur = Moniteur::find($id);
        $vehicule=vehicule::where('id', '=', $moniteur->id_vehicule)->first();
        $vehicules=vehicule::all();
        return view('moniteur.Profil.edit',compact('moniteur','vehicule','vehicules'));
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
        $eleve=moniteur::find($id);
        $input=$request->all();
        $input=$request->all();
        $fileName =$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName,'public');
        $input["image"] = '/storage/'.$path;
        $eleve->update($input);
        return redirect(url('/moniteur/Profil'))->with('flash_message', 'moniteur Addedd!');
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
    }
}
