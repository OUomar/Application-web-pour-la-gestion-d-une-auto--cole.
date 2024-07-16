<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use App\Models\Seriecour;
use DB;
class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $Permis=Seriecour::find($id);
        $Serie=DB::select("SELECT * FROM series WHERE id_Permis=$id");
       // $SerieId=DB::select("SELECT * FROM series");
//dd($SerieId);
        return view('AjoutSeries.index', compact( 'Serie','Permis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('AjoutSeries.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Serie=new Serie();
        $Serie->id_Permis=$request->id_Permis;
        $Serie->Serie=$request->Serie;
        $Serie->save();
        return redirect()->route('Serie.index',$request->id_Permis)->with('flash_message', 'Serie Addedd!');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Seriedel=Serie::where('id',$id)->first();
        $Seriedel->delete();
        return redirect()->route('Serie.index',$id)->with('flash_message', 'Serie delete!');
    }
}
