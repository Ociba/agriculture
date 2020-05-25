<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //
    public function addRoleForm(){
       
            return view('admin.add_role_form');
        
    }
    public function getAllRoles(){
        $get_all_roles = Role::paginate('10');
        
            return view('admin.roles-table',compact('get_all_roles'));
       
}

    public function searchRoles(Request $request){
        if(Role::where('role', $request->role)->doesntExist())
        {
            return Redirect()->back()->withInput()->withErrors('Role doesnot exists, please check your spelling or it is not there');

        }
        $get_all_roles = Role::Where('role', 'like', '%'.$request->role. '%')
        ->paginate('10');

        return view('admin.roles-table',compact('get_all_roles'));
    }

public function createRoles(Request $request){
    if(empty($request->role)){
        return Redirect()->back()->withInput()->withErrors("Role cannot be empty");
    }
    if(Role::where('role', $request->role)->exists())
    {
        return Redirect()->back()->withInput()->withErrors('Role already exists, please enter a new role');

    }

    Role::create(array(
    'role' =>$request->role, 
    
    ));
    return Redirect()->back()->withErrors("Role has been added successfully");
}
public function editRoles(Request $request){
    Role::update(array(
    'updated_by'=>Auth::user()->id,
    'role' =>$request->role
    ));
        return Redirect()->back()->withErrors("Status have been changed");
}
public function deleteRoles($id){
    Role::Where('id',$id)->update(array(
    'status'=>'deleted',
    'updated_by'=>Auth::user()->id
    ));
    return Redirect()->back()->withErrors("Status have been deleted successfully");
}
}
