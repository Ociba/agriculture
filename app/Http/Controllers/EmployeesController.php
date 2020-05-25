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
        $edit_employees =Employees::where('id',$id)->get();
        return view('admin.edit-employees-form', compact('edit_employees'));
    }
    public function addEmployeesForm(){
        $get_user_name =User::select('name','id')->get();
        return view('admin.add-employee-form', compact('get_user_name'));
    }
    public function createEmployee(Request $request){
        if(empty($request->name)){
            return Redirect()->back()->withInput()->withErrors("Name cannot be empty");
        }
        
        if(Employees::where('user_id',Auth::user()->id ,$request->user_id)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Employee already exists.');

        }
        $document_name=$request->qualification;
        $uniqueFileName=$document_name->getClientOriginalName();
        $request->file('qualification')->move('files/', $uniqueFileName);
        
        Employees::create(array(
            'user_id'=>$request->name,
            'qualification'=>$uniqueFileName,
            'experience'=>$request->experience
        ));
        return redirect()->back()->with('message',"Employee Details has been Saved successfully");
    }
    public function displayEmployees(){
        $display_employees =Employees::join('users','employees.user_id','users.id')
        ->where('employees.status','active')
        ->select('employees.qualification','employees.experience','employees.id','users.name')
        ->orderBy('employees.created_at','desc')
        ->paginate('10');
        return view('admin.employees-table', compact('display_employees'));
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
        return Redirect()->back()->withErrors("Employees Details has been updatedsuccessfully");
    }
    public function deleteEmployee($id){
        Employees::where('id', $id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Employee has been deleted successfully");
    }
}
