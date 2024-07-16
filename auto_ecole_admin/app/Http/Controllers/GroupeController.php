<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use App\Models\Moniteur;
use App\Models\User;
use Illuminate\Http\Request;

class GroupeController extends Controller
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
        $groupe=Groupe::all();

        return view('gestion des groupes.index',compact('groupe','moniteur'));
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
        $input= $request->all();
        Groupe::create($input);
        return redirect(url('admin/groupe'))->with('flash_message', 'groupe Addedd!');
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
        $groupe = Groupe::find($id);
        $moniteur=Moniteur::where('id', '=', $groupe->id_moniteur)->first();
        $eleve=User::where('name_groupe', '=', $groupe->name_groupe)->get();
        return view('gestion des groupes.show',compact('groupe','moniteur','eleve'));
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
         //
         $moniteur=Moniteur::all();
         $groupe = Groupe::find($id);
         return view('gestion des groupes.edit',compact('groupe','moniteur'));

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
        $groupe = Groupe::find($id);
        $input=$request->all();
        $groupe->update($input);
        return redirect(url('admin/groupe'))->with('flash_message', 'groupe Addedd!');

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
        Groupe::destroy($id);
        return redirect('admin/groupe')->with('flash_message', 'groupe deleted!');
    }
}
