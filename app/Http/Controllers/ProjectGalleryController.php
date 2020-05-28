<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ProjectGallery;

class ProjectGalleryController extends Controller
{
    //
    public function projectGalleryForm(){
        if(in_array('Can add project gallery', auth()->user()->getUserPermisions())){
        return view('admin.project-gallery-form');
        }else{
            return redirect('/404');
        }
    }
    public function createProjectGallery(Request $request){
        if(empty($request->heading)){
            return Redirect()->back()->withInput()->withErrors("Heading cannot be empty");
        }
        if(Feature::where('heading', $request->heading)->exists()){
            return Redirect()->back()->withErrors("Heading already exists");
        }
        if(empty($request->statement)){
            return Redirect()->back()->withInput()->withErrors("Statement cannot be empty");
        }
        if(Feature::where('statement', $request->statement)->exists()){
            return Redirect()->back()->withErrors("Statement already exists");
        }
        if(empty($request->image)){
            return Redirect()->back()->withInput()->withErrors("Image cannot be empty");
        }
        if($request->hasFile('image')) {

            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $file_name = $files->getClientOriginalName();
            $folderpath =public_path().'/assets/images/';
            $files->move($folderpath, $file_name);
            ProjectGallery::create(array(
            'user_id'=>Auth::user()->id,
            'names'=>$request->names,
            'title'=>$request->title,
            'image'=>$file_name
        ));
        return Redirect()->back()->withErrors("Project Gallery details has been created successfully");
    }else{
        return Redirect()->back()->withErrors("Image has not been created successfully");
    }
}
    public function displayProjectGallery(){
        if(in_array('Can view project gallery', auth()->user()->getUserPermisions())){
        $show_project_gallery =ProjectGallery::join('users','project_galleries.user_id','users.id')
        ->where('project_galleries.status','active')
        ->select('users.name','project_galleries.id','project_galleries.title','project_galleries.names','project_galleries.image')
        ->paginate('10');
        return view('admin.project-gallery',compact('show_project_gallery'));
        }else{
            return redirect('/404');
        }
    }
    public function editProjectGalleryForm($id){
        if(in_array('Can edit project gallery', auth()->user()->getUserPermisions())){
        $show_project_gal=ProjectGallery::where('id',$id)->get();
        return view('admin.edit-project-gallery', compact('show_project_gal'));
        }else{
            return redirect('/404');
        }
    }
    public function updateProjectGallery($id,Request $request){
        ProjectGallery::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'names'=>$request->names,
            'title'=>$request->title,
            'image'=>$request->image
        ));
        return Redirect()->back()->with('message',"Feature has been updated successfully");
    }
    public function deleteProjectGallery($id){
        ProjectGallery::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Feature has been deleted successfully");
    }
}
