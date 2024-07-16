<?php

namespace App\Http\Controllers;
use App\Models\cours;
use App\Models\Groupe;
use App\Models\Moniteur;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cours=cours::all();
        $groupe=Groupe::all();


        return view('gestion cours.index',compact('cours','groupe'));
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
        cours::create($input);
        return redirect(url('admin/Module'))->with('flash_message', 'cours Addedd!');
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

        $cours = cours::find($id);
        $groupe=Groupe::where('name_groupe', '=', $cours->name_groupe)->first();
        $eleve=User::where('name_groupe', '=', $groupe->name_groupe)->get();
        $moniteur=Moniteur::where('id', '=', $groupe->id_moniteur)->first();

        return view('gestion cours.show',compact('cours','moniteur','eleve'));
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
        $cours = cours::find($id);
        $groupe=Groupe::all();

        return view('gestion cours.edit',compact('cours','groupe'));
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
        $cours=cours::find($id);
        $input=$request->all();
        $cours->update($input);
        return redirect(url('admin/cours'))->with('flash_message', 'cours Addedd!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cours::destroy($id);
        return redirect('admin/cours')->with('flash_message', 'cours deleted!');
    }

  
}
