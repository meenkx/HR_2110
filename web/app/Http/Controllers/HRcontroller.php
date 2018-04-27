<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRcontroller extends Controller
{
    //
    public function profile()
    {
        return view('profile');
    }
    public function admin_profile()
    {
        return view('edit.edit_content.profile');
    }

    public function test_calender(){
        return view('test_calender');
    }

    public function calender(){
        return view('calender');
    }

    public function admin_workhistory(){
        return view('edit.edit_content.admin_workhistory');
    }

    public function admin_kpi(){
        return view('edit.edit_content.kpi');
    }

    public function admin_calender(){
        return view('edit.edit_content.admin_calender');
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

    public function leave(){
        return view('leave');
    }

    public function testex(){
        return view('testex');
    }
}
