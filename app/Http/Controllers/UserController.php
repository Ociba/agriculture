<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use DB;

class UserController extends Controller
{
    //
    public function addUserForm(){
        return view('admin.subscribe-users-form');
    }
    public function registerUsers(Request $request){
        User::create([
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
            ]);
            return Redirect()->back()->with('message', 'User has been created Successfully');
    }
    public function getAllRegisteredUsers(){
        $all_users = DB::table('users')->join('roles','users.role_id','roles.id')
        ->select('roles.role','users.*','users.id')->where('users.status','active')->orderBy('id','Desc')
        ->paginate('10');
        
        return view('admin.users',compact('all_users'));
    }
    public function searchUser(Request $request){
        $all_users=User::join('roles','users.role_id','roles.id')
        ->where('users.status','active')
        ->where('users.contact',$request->contact)
        ->orWhere('roles.role',$request->contact)
        ->orWhere('users.email',$request->contact)
        ->orWhere('users.name',$request->contact)
        ->select('roles.role','users.id','users.email','users.contact','users.email','users.name')
        ->paginate('10');
        
        return view('admin.users', compact('all_users'));
    }
    public function editUsersForm($id){
        if(DB::table('users')->where('id',$id)->where('status','Suspended')->exists()){
            return Redirect()->back()->withErrors("You cant Edit a suspended member");
        }
        $pick_user_id_role=Role::select("role", "id")->get();
        $edit_user_view = DB::table('users')->where('id',$id)->get();
        return view('admin.edit-user',compact('edit_user_view','pick_user_id_role'));
    }
    public function updateUserInformation($id, Request $request){
        if(DB::table('users')->where('id',$id)->where('status','Suspended')->exists()){
            return Redirect()->back()->withErrors("You cant Edit a suspended member");
        }
        DB::table('users')->where('id',$id)->update(array(
            'name' => $request->name,
            'email' => $request->email,
            'contact'=>$request->contact,
            'role_id'=>$request->role
        ));
        return Redirect()->back()->with('message',"User Details have been updated successfully");
    }
    public function SuspendUserInformation($id, Request $request){
        DB::table('users')->where('id',$id)->update(array(
            'status' => 'suspended'
        ));
        return Redirect()->back()->withErrors("User has Successfully been Suspended");
    }
    public function displayChangePasswordForm(){
        return view('admin.change-password');
       
    }
    public function store_users_password(Request $request) {
        $get_users_current_password = User::find(Auth::user()->id)->password;
        $current_password = $request->current_password;
        if ($request->new_password == $request->confirm_password) {
            if (Hash::check($current_password, $get_users_current_password)) {
                User::where("id", Auth::user()->id)->update(array('password' => Hash::make($request->new_password)));
                Auth::logout();
                return Redirect()->back()->with('message', 'Password was Updated successfully');
            } else {
                return Redirect()->back()->withInput()->withErrors("Incorrect password has been supplied");
            }
        } else {
            return Redirect()->back()->withInput()->withErrors("Make sure the two new passwords match");
        }
    }
}
