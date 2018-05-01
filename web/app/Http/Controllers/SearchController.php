<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $profiles = DB::table('profiles')
                ->where('Firstname','LIKE','%'.$request->search."%")
                ->orWhere('Lastname','LIKE','%'.$request->search."%")
                ->get();

            if($profiles)
            {
                foreach ($profiles as $key => $profile) {
                    $output.='<tr>'.
                        '<td>'.$profile->ID_member.'</td>'.
                        '<td>'.$profile->Firstname.'</td>'.
                        '<td>'.$profile->Lastname.'</td>'.
                        '<td>'.$profile->Email.'</td>'.
                        '</tr>';
                }
                return Response($output);
            }

        }
    }
}