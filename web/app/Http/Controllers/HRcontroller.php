<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRcontroller extends Controller
{
    //
    public function test()
    {
        return view('test');
    }

    public function test_calender(){
        return view('test_calender');
    }

    public function test_workhistory(){
        return view('test_workhistory');
    }
    
    public function test_teamlist(){
        return view('test_teamlist');
    }
    
    public function noti(){
        return view('notifications');
    }
    
    public function edit(){
        return view('edit.edit_main');
    }
}
