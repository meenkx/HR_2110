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
            $profiles_Email = DB::table('profiles')
                ->where('Email','LIKE','%'.$request->search."%")
                ->get();
            $profiles_Firstname = DB::table('profiles')
                ->where('Firstname','LIKE','%'.$request->search."%")
                ->get();

            if (!$profiles_Email->count() == 0){
                if($profiles_Email)
                {
                    foreach ($profiles_Email as $key => $profile) {
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
            else{
                if($profiles_Firstname)
                {
                    foreach ($profiles_Firstname as $key => $profile) {
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
}