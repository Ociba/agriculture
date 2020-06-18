<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Employees;
use App\User;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    //
    public function editEmployeesForm($id){
        if(in_array('Can edit employee', auth()->user()->getUserPermisions())){
        $edit_employees =Employees::where('id',$id)->get();
        return view('admin.edit-employees-form', compact('edit_employees'));
        }else{
            return redirect('/404');
        }
    }
    public function addEmployeesForm(){
        if(in_array('Can add employee', auth()->user()->getUserPermisions())){
        $get_user_name =User::select('name','id')->get();
        return view('admin.add-employee-form', compact('get_user_name'));
        }else{
            return redirect('/404');
        }
    }
    public function createEmployee(Request $request){
        if(empty($request->name)){
            return Redirect()->back()->withInput()->withErrors("Name cannot be empty");
        }
        // return getSize($request->qualification);
        $required_size = 2048000;
        if($request->file('qualification')->getSize() > $required_size){
            return Redirect()->back()->withInput()->withErrors("The Uploaded file is big, please put a file not bigger than 2 mb");
        }
        $employee_qualification=$request->qualification;
        $qualification=$employee_qualification->getClientOriginalName();
        $request->file('qualification')->move('files/',$qualification);
        
        Employees::create(array(
            'user_id'=>$request->name,
            'qualification'=>$qualification,
            'experience'=>$request->experience
        ));
        return redirect()->back()->with('message',"Employee Details has been Saved successfully");
    }
    public function displayEmployees(){
        if(in_array('Can view employees', auth()->user()->getUserPermisions())){
        $display_employees =Employees::join('users','employees.user_id','users.id')
        ->where('employees.status','active')
        ->select('employees.qualification','employees.experience','employees.id','users.name')
        ->orderBy('employees.created_at','desc')
        ->paginate('10');
        return view('admin.employees-table', compact('display_employees'));
        }else{
            return redirect('/404');
        }
    }
    public function searchEmployees(Request $request){
        $display_employees =Employees::join('users','employees.user_id','users.id')
        ->where('employees.status','active')
        ->where('users.name',$request->name)
        ->orwhere('employees.qualification',$request->name)
        ->orwhere('employees.experience',$request->name)
        ->select('employees.qualification','employees.experience','employees.id','users.name')
        ->paginate('10');
        return view('admin.employees-table', compact('display_employees'));
    }
    public function updateEmployeesInformation($id,Request $request){
        Employees::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience
        ));
        return Redirect()->back()->with('message',"Employees Details has been updatedsuccessfully");
    }
    public function deleteEmployee($id){
        Employees::where('id', $id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Employee has been deleted successfully");
    }
}
