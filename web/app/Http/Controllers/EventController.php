<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = [];
        $data = Activity::all();
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
//                        'url' => 'http://127.0.0.1:8000/'.$value->Activity_name,
                        'url' => 'http://127.0.0.1:8000/'.'edit/'.$value->Activity_ID,
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('calender', compact('calendar'));
    }

    public function edit($id){
        dd($id);
        return view('calender_edit');
    }
}
