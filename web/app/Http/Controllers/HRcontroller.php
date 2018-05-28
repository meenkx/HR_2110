<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Department;
use App\Forms_Evidence;
use App\Value_of_Each_Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $idmember = Auth::user()->ID_member;
        $adwork = DB::select(DB::raw("SELECT sw.Work_date AS Work_Date , sw.Work_status AS Status_Work , sw.WorkTime_checkin AS Time_CheckIn , sw.WorkTime_checkout AS Time_CheckOut , sw.OT_Time_CheckIn , sw.OT_Time_CheckOut , sw.OT AS Over_Time FROM profile p , status_work sw WHERE p.ID_member = sw.ID_member AND p.ID_member = '$idmember'"));
        return view('edit.edit_content.admin_workhistory',compact('adwork'));
    }

    public function admin_kpi(){
        $results = DB::select( DB::raw("SELECT KPI_Code,Key_Result_Areas,Key_Performance_Indicators,Weight_of_KPIs,Target FROM performance_measurement") );
        return view('edit.edit_content.admin_kpi',['performance_measurement' => $results]);
    }

    public function calKPI(Request $request){
        $kpi = $request->input('kpi');
        $target = $request->input('Target');
        $target1 = explode(" ",$target);
        $Actual = $request->input('Actual');
        $Score = $target1[0] / $request->input('Actual') * 100 ;
        $TotalScore = $Score * $request->input('Weight_of_KPIs') / 100 ;
        DB::select( DB::raw("UPDATE performance_measurement SET Actual = '$Actual' , Score = '$Score' , Final_score = '$TotalScore' WHERE KPI_Code = '$kpi' ") );

        if($target > $Actual){
            DB::select(DB::raw("UPDATE pm_of_each_department SET Value = 'False' WHERE KPI_Code = '$kpi'"));
        }
        else{
            DB::select(DB::raw("UPDATE pm_of_each_department SET Value = 'Success' WHERE KPI_Code = '$kpi'"));
        }
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
        DB::table('status_work')
            ->insert(
            [
                'Work_date' => $request->input('Date'),
                'ID_member' => $idMember,
                'Work_status' => "Leave",
                'WorkTime_checkin' => "00:00:00",
                'WorkTime_checkout' => "00:00:00",
                'OT_Time_CheckIn' => "00:00:00",
                'OT_Time_CheckOut' => "00:00:00",
            ]
            )
        ;
    }
    
    public function edit(){
        return view('edit.edit_main');
    }

    public function teamlist(){
        $jobid = Auth::user()->Job_ID;
        $result = DB::select(DB::raw("SELECT DISTINCT p.Job_ID , d.Depart_ID , l.Location_ID FROM profile p , department d , location l , job j WHERE p.Job_ID = j.Job_ID AND j.Depart_ID = d.Depart_ID AND d.Location_ID = l.Location_ID AND p.Job_ID = '$jobid'"));
        foreach ($result as $results){
            $lo = $results->Location_ID;
            $de = $results->Depart_ID;
            $teamlist = DB::select(DB::raw("SELECT p.Firstname , p.Lastname , dm.Depart_name , j.Job_name , p.User_role , p.Tel FROM profile p , job j, department dm, location l WHERE p.Job_ID = j.Job_ID AND j.Depart_ID = dm.Depart_ID AND dm.Location_ID = l.Location_ID AND l.Location_ID = '$lo' AND dm.Depart_ID = '$de'"));
            $head = DB::select(DB::raw("SELECT DISTINCT j.Job_name FROM profile p , job j, department dm WHERE j.Depart_ID = dm.Depart_ID AND dm.Depart_ID = '$de' AND j.Job_name LIKE 'Head%' "));
        }
        return view('edit.edit_content.admin_teamlist')->with(compact('teamlist'))->with(compact('head'));
    }

    public function payment(){
        $IDmember = Auth::user()->ID_member;
        $profile = DB::select(DB::raw("SELECT p.ID_member,p.Firstname,p.Lastname,p.Job_ID,p.Book_Account_No,j.Job_name,d.Depart_ID FROM profile p , job j ,department d WHERE ID_member = '$IDmember' AND p.Job_ID = j.Job_ID AND j.Depart_ID = d.Depart_ID"));
        foreach ($profile as $profiles){
            $Firstname = $profiles->Firstname;
            $Lastname = $profiles->Lastname;
            $Job_ID = $profiles->Job_ID;
            $Book_Account_No = $profiles->Book_Account_No;
            $Job_name = $profiles->Job_name;
            $Depart_ID = $profiles->Depart_ID;
        }
        $totalValueSkill = DB::select(DB::raw("SELECT p.Firstname, p.Lastname , SUM(vc.Value_Certificate) AS Total_valueOfCertificate FROM profile p , certificate c, value_of_each_certificate vc WHERE p.ID_member = c.ID_member AND c.ID_Certificate = vc.ID_Certificate AND p.ID_member = '$IDmember'"));
        foreach ($totalValueSkill as $totalValueSkills){
            $ttValueSkill = $totalValueSkills->Total_valueOfCertificate;
        }

        $ValueOTtotal = DB::select(DB::raw("SELECT p.Firstname, p.Lastname , SUM(stw.OT*j.OT_Rate) AS Total_ValueOfOT FROM profile p ,job j ,status_work stw WHERE p.ID_member = stw.ID_member AND p.Job_ID = j.Job_ID AND p.ID_member = '$IDmember'"));
        foreach ($ValueOTtotal as $ValueOTtotals){
            $VOTtotal = $ValueOTtotals->Total_ValueOfOT;
        }
        $totalBonus = DB::select(DB::raw("SELECT dm.Depart_name , SUM(pm.Final_score) AS Final_Score FROM department dm, pm_of_each_department pd, performance_measurement pm WHERE dm.Depart_ID = pd.Depart_ID AND pd.KPI_CODE = pm.KPI_Code AND dm.Depart_ID = '$Depart_ID'"));
        foreach ($totalBonus as $totalBonuss){
            $totalBonusss = $totalBonuss->Final_Score;
        }
        //วันสงกรานต์
        $songkrana = DB::select(DB::raw("SELECT Start_date , End_date FROM payment_special WHERE Detail = 'วันสงกรานต์'"));
        foreach ($songkrana as $songkranas){
            $songkranasstart = $songkranas->Start_date;
            $songkranasend = $songkranas->End_date;
        }
        $songkranb = DB::select(DB::raw("SELECT COUNT(Work_date) AS COUNTSpecialPayment FROM status_work WHERE Work_date BETWEEN '$songkranasstart' AND '$songkranasend' AND ID_member = '$IDmember'"));
        foreach ($songkranb as $songkranbs){
            $songkranassum = $songkranbs->COUNTSpecialPayment;
        }

        //วันขึ้นปีใหม่
        $b = DB::select(DB::raw("SELECT Start_date , End_date FROM payment_special WHERE Detail = 'วันขึ้นปีใหม่'"));
        foreach ($b as $bb){
            $bbstart = $bb->Start_date;
            $bbend = $bb->End_date;
        }
        $bbb = DB::select(DB::raw("SELECT COUNT(Work_date) AS COUNT_Special_Payment1 FROM status_work WHERE Work_date BETWEEN '$bbstart' AND '$bbend' AND ID_member = '$IDmember'"));
        foreach ($bbb as $bbbb){
            $happynewsum = $bbbb->COUNT_Special_Payment1;
        }

        //วันแรงงาน
        $c = DB::select(DB::raw("SELECT Start_date , End_date FROM payment_special WHERE Detail = 'วันแรงงาน'"));
        foreach ($c as $cc){
            $ccstart = $cc->Start_date;
            $ccend = $cc->End_date;
        }
        $ccc = DB::select(DB::raw("SELECT COUNT(Work_date) AS COUNT_Special_Payment2 FROM status_work WHERE Work_date BETWEEN '$ccstart' AND '$ccend' AND ID_member = '$IDmember'"));
        foreach ($ccc as $cccc){
            $rangsum = $cccc->COUNT_Special_Payment2;
        }

        //วันวิสาขบูชา
        $d = DB::select(DB::raw("SELECT Start_date , End_date FROM payment_special WHERE Detail = 'วันวิสาขบูชา'"));
        foreach ($d as $dd){
            $ddstart = $dd->Start_date;
            $ddend = $dd->End_date;
        }
        $ddd = DB::select(DB::raw("SELECT COUNT(Work_date) AS COUNT_Special_Payment3 FROM status_work WHERE Work_date BETWEEN '$ddstart' AND '$ddend' AND ID_member = '$IDmember'"));
        foreach ($ddd as $dddd){
            $ddddsum = $dddd->COUNT_Special_Payment3;
        }

        //วันอาสาฬหบูชา
        $e = DB::select(DB::raw("SELECT Start_date , End_date FROM payment_special WHERE Detail = 'วันอาสาฬหบูชา'"));
        foreach ($e as $ee){
            $eestart = $ee->Start_date;
            $eeend = $ee->End_date;
        }
        $eee = DB::select(DB::raw("SELECT COUNT(Work_date) AS COUNT_Special_Payment4 FROM status_work WHERE Work_date BETWEEN '$eestart' AND '$eeend' AND ID_member = '$IDmember'"));
        foreach ($eee as $eeee){
            $eeeesum = $eeee->COUNT_Special_Payment4;
        }

        //การขาดงาน
        $Absent = DB::select(DB::raw("SELECT p.Firstname, p.Lastname , COUNT(sw.ID_member) AS Total_DayMissing FROM profile p , status_work sw WHERE p.ID_member = sw.ID_member AND p.ID_member = 1 AND sw.Work_status = 'Missing'"));
        foreach ($Absent as $eeee){
            $absent = $eeee->Total_DayMissing;
        }
        if($absent>5){
            $absentnotshow = ($absent-5)*200;
        }else{
            $absentnotshow = 0;
        }
        //การมาสาย
        $Late = DB::select(DB::raw("SELECT p.Firstname, p.Lastname , COUNT(sw.ID_member) AS Total_DayLate FROM profile p , status_work sw WHERE p.ID_member = sw.ID_member AND p.ID_member = 1 AND sw.Work_status = 'Late'"));
        foreach ($Late as $Lates){
            $Latess = $Lates->Total_DayLate;
        }
        if($absent>5){
            $absentnotshow = ($absent-5)*100;
        }else{
            $absentnotshow = 0;
        }

        //การลา
        $leave = DB::select(DB::raw("SELECT p.Firstname, p.Lastname , COUNT(sw.ID_member) AS Total_DayLeave FROM profile p , status_work sw WHERE p.ID_member = sw.ID_member AND p.ID_member = 1 AND sw.Work_status = 'Leave'"));
        foreach ($leave as $leaves){
            $leavess = $leaves->Total_DayLeave;
        }
        if($leavess>5){
            $leavessnotshow = ($leavess-5)*100;
        }else{
            $leavessnotshow = 0 ;
        }

        //เงินค่าตำแหน่ง
        $s = DB::select(DB::raw("SELECT j.Salary AS SALARY FROM profile p , job j WHERE p.Job_ID = '$Job_ID' AND p.Job_ID = j.Job_ID"));
        foreach ($s AS $sss){
            $salary = $sss->SALARY;
        }
        //bonus
        $bonus = DB::select(DB::raw("SELECT SUM(Final_score) AS SUMbonus FROM performance_measurement WHERE "));
        foreach ($bonus AS $bonuss){
            $SUMBONUS = $bonuss->SUMbonus;
        }
        if ($SUMBONUS > 80){
            $SUMBONUS = $salary*5/100;
        }else{
            $SUMBONUS = 0 ;
        }

        $socialSecurityFund = "1000";

        $payspe = ($songkranassum + $happynewsum + $rangsum + $ddddsum + $eeeesum)*500;
        $TOTALINCOME = $ttValueSkill + $VOTtotal + $salary + $SUMBONUS + $payspe;

        $tax = $TOTALINCOME*7/100;
        $TOTALDEDUCTION = $absentnotshow + $leavessnotshow + $absentnotshow + $tax + $socialSecurityFund;
        $NETINCOME = $TOTALINCOME-$TOTALDEDUCTION;
        return view('payment')
            ->with('ID',$IDmember)
            ->with('Absent',$absent)
            ->with('Salary',$salary)
            ->with('Bonus',$SUMBONUS)
            ->with('NETINCOME',$NETINCOME)
            ->with('TOTALDEDUCTION',$TOTALDEDUCTION)
            ->with('Leave',$leavess)
            ->with('Totalincome',$TOTALINCOME)
            ->with('SocialSecurityFund',$socialSecurityFund)
            ->with('payspe',$payspe)
            ->with('Late',$Latess)
            ->with('Firstname',$Firstname)
            ->with('Lastname',$Lastname)
            ->with('Job_ID',$Job_ID)
            ->with('Book_Account_No',$Book_Account_No)
            ->with('Job_name',$Job_name)
            ->with('Depart_ID',$Depart_ID)
            ->with('ttValueSkill',$ttValueSkill)
            ->with('VOTtotal',$VOTtotal)
            ->with('totalBonusss',$totalBonusss)
            ->with('songkranassum',$songkranassum)
            ->with('happynewsum',$happynewsum)
            ->with('rangsum',$rangsum)
            ->with('ddddsum',$ddddsum)
            ->with('eeeesum',$eeeesum)
            ;
    }

    public function profileindex(){
        $Depart = DB::select(DB::raw("SELECT Depart_ID, Depart_name FROM department"));
        $Job = DB::select(DB::raw("SELECT Job_ID,Job_name FROM job"));
        $userrole = DB::select(DB::raw("SELECT Job_ID,Job_name FROM job"));
        return view('addProfile')->with(compact('Depart'))->with(compact('Job'));
    }
    public function leave(){
        return view('leave');
    }

    public function profileAdd(Request $request){
        $name = $request->input('Name');
        $fullname = explode(" ", $name);

        DB::table('profile')
            ->where(['Firstname' => $fullname[0] , 'Lastname' => $fullname[1]])
            ->update(        [
                'DOB' => $request->input('DOB'),
                'Gender' => $request->input('Gender'),
                'Marital_status' => $request->input('Marital_status'),
                'Email' => $request->input('Email'),
                'Tel' => $request->input('Tel'),
                'Job_ID' => $request->input('Job_IDb'),
                'Social_link' => $request->input('Social_link'),
                'Work_type' => $request->input('Work_type'),
                'Emergency_Contact' => $request->input('Emergency_Contact'),
                'Hire_day' => $request->input('Hire_day'),
                'Nationality' => $request->input('Nationality'),
                'Data_status' => $request->input('Data_status'),
                'User_role' => $request->input('Userrole'),
                'password' => Hash::make($request->input('password')),
                'Book_Account_No' => $request->input('Book_Account_No'),
            ]);
    }

}
