<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Activity_status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = [];
//        $data = Activity::all();

        $depart = DB::table('job')->select('Depart_ID')->where('Job_ID',Auth::user()->Job_ID)->get();
        foreach ($depart as $key => $depart) {
            $deparID = $depart->Depart_ID;
        }
        $data = DB::table('department')
            ->join('activity_department', 'department.Depart_ID', '=', 'activity_department.Depart_ID')
            ->join('activity', 'activity.Activity_ID', '=', 'activity_department.Activity_ID')
            ->where('department.Depart_ID',$deparID)
            ->select('activity.*','department.*')
            ->get();

        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->Activity_name,
                    true,
                    new \DateTime($value->Start_date),
                    new \DateTime($value->End_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'http://127.0.0.1:8000/'.'edit/'.$value->Activity_ID,
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events)
            ->setOptions([ //set fullcalendar options
            'firstDay' => 1,
            'height' => '100px',
            'themeSystem' => 'bootstrap3',
            'columnHeader' => false,
            'aspectRatio' => 2.5
        ]);


        return view('calender', compact('calendar'));
    }

    public function edit($id){

        $id_member = Auth::user()->ID_member;

        $results = DB::select( DB::raw("SELECT adm.ID_listActivity , p.ID_member , av.Activity_ID, av.Activity_name , av.Objective , av.Type , av.Detail , av.Start_date , av.End_date FROM profile p, job j, department dm, activity_department adm, activity av WHERE p.Job_ID = j.Job_ID AND j.Depart_ID = dm.Depart_ID AND dm.Depart_ID = adm.Depart_ID AND adm.Activity_ID = av.Activity_ID AND av.Activity_ID = '$id' AND p.ID_member = '$id_member' ") );
        foreach ($results as $resultss){
                $status = DB::select(DB::raw("SELECT status FROM activity_status WHERE ID_listActivity = $resultss->ID_listActivity AND ID_member = $id_member"));
        }
        return view('calenderContent')->with( compact('results'))->with( compact('status'));
    }

    public function editSave(Request $request)
    {

        $saveEvent = new Activity_status();
        $saveEvent->ID_listActivity = $request->input('ID_listActivity');
        $saveEvent->ID_member = Auth::user()->ID_member;
        $saveEvent->status = $request->input('status');
        $saveEvent->save();
        return redirect()->route('events');
    }
}
