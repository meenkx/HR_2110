<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HRcontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(Request $request)
    {
        $profileid = $request->query('profile');
        if ($profileid == null){
            return redirect()->route('admin_profile');
        }else{
            return view('profile');
        }
    }
    public function admin_profile()
    {
        return view('edit.edit_content.admin_profile');
    }

    public function calender(){
        $depart = DB::table('job')->select('Depart_ID')->where('Job_ID',Auth::user()->Job_ID)->get();
        foreach ($depart as $key => $depart) {
            $deparID = $depart->Depart_ID;
        }
        $users = DB::table('department')
            ->join('activity_department', 'department.Depart_ID', '=', 'activity_department.Depart_ID')
            ->join('activity', 'activity.Activity_ID', '=', 'activity_department.Activity_ID')
            ->where('department.Depart_ID',$deparID)
            ->select('activity.*','department.*')
            ->get();
        foreach ($users as $key => $user) {
            $users_Type = $user->Type;
            $users_Activity_name = $user->Activity_name;
            $users_Date = $user->Date;
            $users_End_Date = $user->End_Date;
        }
//        dd($users);
//        return view('calender',['type' => $users_Type ,'ActivityName' => $users_Activity_name ,'Datee' => $users_Date , 'EndDate' => $users_End_Date]);
        return view('calender',['type' => $users ]);
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

    public function testex2(){
        return view('testex2');
    }
}
