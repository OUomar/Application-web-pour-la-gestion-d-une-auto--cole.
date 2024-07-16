<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Seriecour;
use App\Models\Video;
class CoursvideoController extends Controller
{
    public function index(){
       
         //$Per=Seriecour::find($id);
         $Vid=Video::all();
         
         return view('user.cours.index',compact('Vid'));
    }
  
}
