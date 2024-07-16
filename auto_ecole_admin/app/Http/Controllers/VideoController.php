<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;
use App\Models\Serie;
use App\Models\Seriecour;
use DB;
class VideoController extends Controller
{
    
    public function index($id)
    {
        $Serie=Serie::find($id);
       //dd($Serie);
       
        $Video=DB::select("SELECT * FROM videos WHERE id_Serie=$id");
        return view('AjoutVideos.index',compact('Serie','Video'));
    }

    public function create()
    {
        return view('AjoutVideos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
         'video'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm'
        ]);
        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
        $url = Storage::disk('public')->url($filePath);
 
        if ($isFileUploaded) {
            $video = new Video();
            $video->id_Serie = $request->id_Serie;
            $video->titre= $request->titre;
            $video->video = $filePath;
            $video->save();
            return redirect()->route('Video.index',$request->id_Serie)->with('flash_message', 'Serie Addedd!');
        }
        return back()
            ->with('error','Unexpected error occured');


    }


    public function show($id)
    {
       //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //$videodel=Video::where('id',$id)->first();
        Video::destroy($id);
        //$videodel->delete();
        return redirect()->route('Serie.index',$id)->with('flash_message', 'Serie delete!');
    }
}
