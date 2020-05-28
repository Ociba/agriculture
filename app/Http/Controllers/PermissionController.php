<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permission;
use App\PermissionRole;
use App\Role;
use App\User;

class PermissionController extends Controller
{
    //
    public function getAllPermissionsForARole($id){
        $get_selected_role = Role::where('id',$id)->get();
        $get_all_permissions = PermissionRole::join('roles','permission_roles.role_id','roles.id')
        ->join('permissions','permission_roles.permission_id','permissions.id')
        ->where('roles.id',$id)
        ->paginate('10');
        
        return view('admin.permission-table',compact('get_all_permissions','get_selected_role'));
    }

    public function addPermissionForm(){
        return view('admin.add_permission_form');
    }

    public function pickAllPermissionsCheckBox(){
        $select_all_permissions = Permission::paginate('10');
        return view('admin.checkboxes_permission_table',compact('select_all_permissions'));
    }
    

    public function assign_roles($id, Request $request){
        if(empty($request->user_permisions)){
            return redirect()->back()->withErrors("No updates were made, you didn't select any permision");
        }
        $permissions = $request->user_permisions;
            foreach($permissions as $permission){
                if(PermissionRole::where('role_id',$id)->where('permission_id',$permission)->exists()){
                    continue;
                }
                else{
                    PermissionRole::create(array(
                        'role_id' => $id,
                        'permission_id' => $permission,
                        'created_by'     => Auth::user()->id
                    ));
                }
            }
        return Redirect()->back()->with('message',"Permission(s) added Successfully");
    }
    public function searchPermission(Request $request){
        if(Permission::where('permission', $request->permission)->doesntExist())
        {
            return Redirect()->back()->with('message','permission doesnot exists, please check your spelling or it is not there');
            
        }
        $get_all_permissions = Permission::where('permission','like', '%'.$request->permission. '%') 
        ->paginate(10);
        return view('admin.permission-table',compact('get_all_permissions'));
    }
    public function unsignPermission($id){
        PermissionRole::where('permission_id',$id)->delete();
        return redirect()->back()->with('message','Permission has been unsigned successfully');
    }
}
