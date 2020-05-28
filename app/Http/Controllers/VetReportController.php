<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\VetReport;

class VetReportController extends Controller
{
    //
    public function addDoctorsReport(){
        if(in_array('Can add vet reports', auth()->user()->getUserPermisions())){
        return view('admin.doctors-report-form');
    }else{
         return redirect('/404');
    }
    }
    public function editDoctorsReport($id){
        if(in_array('Can edit vet reports', auth()->user()->getUserPermisions())){
        $edit_doctors_report =VetReport::where('id',$id)->get();
        return view('admin.edit-doctors-report',compact('edit_doctors_report'));
        }else{
            return redirect('/404');
        }
    }
    public function createDoctorsReport(Request $request){
        VetReport::create(array(
            'user_id'=>Auth::user()->id,
            'farmer_name'=>$request->farmer_name,
            'farmer_contact'=>$request->farmer_contact,
            'doctor_name'=>$request->doctor_name,
            'doctor_contact'=>$request->doctor_contact,
            'treatment'=>$request->treatment,
            'number'=>$request->number
        ));
        return redirect()->back()->with('message',"Doctors report details has been sent successfully");
    }
    public function displayDoctorsReport(){
        $display_doctors_report =VetReport::join('users','vet_reports.user_id','users.id')
        ->where('vet_reports.status','active')
        ->select('vet_reports.farmer_name','users.name','vet_reports.farmer_contact','vet_reports.doctor_name','vet_reports.doctor_contact',
        'vet_reports.treatment','vet_reports.number','vet_reports.id','vet_reports.created_at')
        ->orderBy('vet_reports.created_at','DESC')
        ->paginate('10');
        return view('admin.vet-report-table',compact('display_doctors_report'));
    }
    public function searchVetReportDetails(Request $request){
        $display_doctors_report =VetReport::join('users','vet_reports.user_id','user_id')
        ->where('vet_reports.status','active')
        ->where('vet_reports.farmer_name',$request->farmer_name)
        ->orWhere('users.name',$request->farmer_name)
        ->orWhere('vet_reports.farmer_contact',$request->farmer_name)
        ->orWhere('vet_reports.doctor_name',$request->farmer_name)
        ->orWhere('vet_reports.doctor_contact',$request->farmer_name)
        ->orWhere('vet_reports.treatment',$request->farmer_name)
        ->orWhere('vet_reports.farmer_name',$request->farmer_name)
        ->select('vet_reports.farmer_name','users.name','vet_reports.farmer_contact','vet_reports.doctor_name','vet_reports.doctor_contact',
        'vet_reports.treatment','vet_reports.number','vet_reports.id','vet_reports.created_at')
        ->orderBy('vet_reports.created_at','desc')
        ->paginate('10');
        return view('admin.vet-report-table', compact('display_doctors_report'));
    }
    public function updateDoctorReports($id, Request $request){
        VetReport::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'farmer_name'=>$request->farmer_name,
            'farmer_contact'=>$request->farmer_contact,
            'doctor_name'=>$request->doctor_name,
            'doctor_contact'=>$request->doctor_contact,
            'treatment'=>$request->treatment,
            'number'=>$request->number
        ));
        return redirect()->back()->with('message',"Doctors report details has been updated successfully");
    }
    public function deleteDoctorReports($id){
        VetReport::where('id',$id)->update(array('status'=>'deleted'));
        return redirect()->back()->with('message',"Doctors report details has been deleted successfully");
    }
}
