<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class FullCalendarController extends Controller
{

    public function getEvent(){
        $events=Event::all();
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                    ->get(['id','title','id_moniteur','start', 'end',]);
            return response()->json($events);
        }

        return view('calendrer.index',compact('events'));

    }
    public function createEvent(Request $request){
        $data = $request->except('_token');
        $events = Event::insert($data);
        return response()->json($events);

    }

    public function deleteEvent(Request $request){
        $event = Event::find($request->id);
        return $event->delete();
    }


    public function update(Request $request)
    {
        $data = $request->except('_token');
        $events = Event::update($data);
        return response()->json($events);
    }


}
