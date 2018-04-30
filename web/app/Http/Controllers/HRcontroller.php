<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRcontroller extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function profile()
    {
        return view('profile');
    }
    public function admin_profile()
    {
//        dd(session()->all());
        return view('edit.edit_content.admin_profile');
    }

    public function calender(){
        return view('calender');
    }

    public function admin_workhistory(){
        return view('edit.edit_content.admin_workhistory');
    }

    public function admin_kpi(){
        return view('edit.edit_content.admin_kpi');
    }

    public function admin_calender(){
        return view('edit.edit_content.admin_calender');
    }

    public function admin_salary(){
        return view('edit.edit_content.admin_salary');
    }

    public function admin_salaryEdit(){
        return view('edit.edit_content.admin_salaryEdit');
    }

    public function admin_branchLocation(){
        return view('edit.edit_content.admin_branchLocation');
    }

    public function admin_certificate(){
        return view('edit.edit_content.admin_certificate');
    }

    public function admin_payment(){
        return view('edit.edit_content.admin_payment');
    }
    
    public function noti(){
        return view('edit.edit_content.admin_notifications');
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
