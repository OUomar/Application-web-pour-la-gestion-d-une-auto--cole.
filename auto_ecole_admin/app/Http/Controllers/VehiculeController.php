<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicule;
use DB;
class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $vehicule=vehicule::all();
        return view('gestion des vehicules.index')->with('vehicule', $vehicule);
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
        vehicule::create($input);
        return redirect(url('admin/vehiecule'))->with('flash_message', 'vehicule Addedd!');
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
        $vehicule = vehicule::find($id);
        return view('gestion des vehicules.show')->with('vehicule', $vehicule);
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
        $vehicule = vehicule::find($id);
        return view('gestion des vehicules.edit')->with('vehicule', $vehicule);
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
        $vehicule=vehicule::find($id);
        $input=$request->all();
        $vehicule->update($input);
        return redirect(url('admin/vehiecule'))->with('flash_message', 'vehicule Addedd!');
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
        vehicule::destroy($id);
        return redirect('admin/vehiecule')->with('flash_message', 'vehiecule deleted!');
    }

    
}
