<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Department;
use App\Forms_Evidence;
use App\Value_of_Each_Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


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
//        dd(session()->all());
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
            $users_Date = $user->start_date;
            $users_End_Date = $user->end_date;
        }
//        dd($users);
//        return view('calender',['type' => $users_Type ,'ActivityName' => $users_Activity_name ,'Datee' => $users_Date , 'EndDate' => $users_End_Date]);
        return view('calender',['type' => $users ]);
    }

//    form evident
    public function saveFormEvident(Request $request)
    {
//
        $saveFm = Forms_Evidence::where('Date','=',$request->input('date'))->get();
        if($saveFm->isEmpty())
        {
            $saveFMs = new Forms_Evidence();
            $saveFMs->ID_member = Auth::user()->ID_member;
//            $saveFMs->ID_Evidence = Auth::user()->ID_member."_".date("dmY");
            $saveFMs->Date = $request->input('date');
            $saveFMs->Reason = $request->input('reason');
            $saveFMs->Confirm = "ไม่อนุมัติ";
            $saveFMs->save();
        }
        else{
            $saveFmc = Forms_Evidence::where('Date','=',$request->input('date'))->get();
            foreach ($saveFmc as $saveFmcs){
                $saveFmcs->Date = $request->input('date');
                $saveFmcs->Reason = $request->input('reason');
                $saveFmcs->save();
            }
        }

    }

//    form certificate
    public function saveFormCertificate(Request $request)
    {
//
        $saveFmCer = Value_of_Each_Certificate::where('Certificate_name','=',$request->input('CertificateName'))->get();
        if($saveFmCer->isEmpty())
        {
            $saveFMsCer = new Value_of_Each_Certificate();
            $saveFMsCer->Certificate_name = $request->input('CertificateName');
            $saveFMsCer->Value_Certificate = $request->input('CertificateValue');
            $saveFMsCer->Certificate_from = $request->input('CertificateFrom');
            $saveFMsCer->save();
        }
        else{
            $saveFmcCer = Value_of_Each_Certificate::where('Certificate_name','=',$request->input('CertificateName'))->get();
            foreach ($saveFmcCer as $saveFmcCers){
                $saveFmcCers->Value_Certificate = $request->input('CertificateValue');
                $saveFmcCers->Certificate_from = $request->input('CertificateFrom');
                $saveFmcCers->save();
            }
        }

    }

    public function admin_workhistory(){
        return view('edit.edit_content.admin_workhistory');
    }

    public function admin_kpi(){
        $results = DB::select( DB::raw("SELECT KPI_Code,Key_Result_Areas,Key_Performance_Indicators,Weight_of_KPIs,Target FROM performance_measurement") );
        return view('edit.edit_content.admin_kpi',['performance_measurement' => $results]);
    }

    public function calKPI(Request $request){
        $kpi = $request->input('kpi');
        $target = $request->input('Target');
        $Score = $target / $request->input('Actual') * 100 ;
        $TotalScore = $Score * $request->input('Weight_of_KPIs') / 100 ;
        $results = DB::select( DB::raw("UPDATE performance_measurement SET Score = '$Score' , Final_score = '$TotalScore' WHERE KPI_Code = '$kpi' ") );
//        $results->save();
        return redirect()->route('admin_kpi');
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
        $jobid = Session::get('authen_job_id');
        $locationid = DB::select(DB::raw("SELECT DISTINCT l.Location_name , l.Location_ID FROM profile p , job j ,department d , location l WHERE p.Job_ID = j.Job_ID AND j.Depart_ID = d.Depart_ID and d.Location_ID = l.Location_ID AND p.Job_ID = '$jobid'"));
        foreach ($locationid as $locationids){
            $locationids_get = $locationids->Location_ID;
        }
        $brance = DB::select(DB::raw("SELECT  dm.Depart_name , COUNT(dm.Depart_ID) AS Total_Job FROM job j, department dm, location l WHERE  j.Depart_ID = dm.Depart_ID AND dm.Location_ID = l.Location_ID AND l.Location_ID = '$locationids_get' GROUP BY dm.Depart_name"));
        $location = DB::select(DB::raw("SELECT Location_ID , Location_name FROM location"));
        return view('edit.edit_content.admin_branchLocation',compact(['brance','location']));
    }

    public function saveDepartment(Request $request){
        $DepartmentName = $request->input('DepartmentName');
        $DepartmentTel = $request->input('DepartmentTel');
        $LocationID = $request->input('LocationID');
        DB::table('department')->insert([
            [
                'Depart_name' => $DepartmentName,
                'Tel' => $DepartmentTel,
                'Location_ID' => $LocationID,
            ],
        ]);
    }

    public function admin_certificate(){
        $listCertificate = DB::table('value_of_each_certificate')->select('Certificate_name', 'Certificate_from','ID_Certificate')->get();
        return view('edit.edit_content.certificate_edit',compact('listCertificate'));
    }

    public function showPicCer(Request $request){

        $id = $request->input('ID_Certificate');
        $resultss = DB::select( DB::raw("SELECT Certificate_picture FROM value_of_each_certificate WHERE ID_Certificate = '$id'") );

        if ($resultss) {
            foreach ($resultss as $resultsss){
                Session::put('CertificatePic',asset('/certificate')."/".$resultsss->Certificate_picture);
            }
//            return response()->json(['status'=>'Hooray']);
            return response()->json($resultss, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }
    }

    public function admin_payment(){
        return view('edit.edit_content.admin_payment');
    }
    
    public function noti(){
        $id = Auth::user()->Job_ID;
        $formNoti = DB::select(DB::raw("SELECT p.Firstname , p.Lastname , fe.Date , fe.Reason , fe.Form_evi_upload , p.ID_member FROM profile p, forms_evidence fe , department dm , job j WHERE fe.ID_member = p.ID_member AND p.Job_ID = j.Job_ID AND j.Depart_ID = dm.Depart_ID AND p.Job_ID = '$id' AND fe.Confirm NOT LIKE 'อนุมัติ%' "));
        return view('edit.edit_content.admin_notifications',compact('formNoti'));
    }

    public function sameNotiCon(Request $request){

        $idMember = $request->input('idMember');
        $Date = $request->input('Date');
        $ConfirmFE = $request->input('ConfirmFE');
        $formNoti = DB::select(DB::raw( "UPDATE forms_evidence SET Confirm = '$ConfirmFE' WHERE ID_member = '$idMember' AND Date = '$Date' "));
    }
    
    public function edit(){
        return view('edit.edit_main');
    }

    public function workin(){
        
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
