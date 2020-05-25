<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Gallery;
use App\ProjectGallery;

class ProjectController extends Controller
{
    //
    public function displayProject(){
        $show_gallery =Gallery::join('users','galleries.user_id','users.id')
        ->where('galleries.status','active')
        ->select('galleries.title','galleries.message','galleries.image','users.name','galleries.id')
        ->get();
        $show_project_gallery =ProjectGallery::join('users','project_galleries.user_id','users.id')
        ->where('project_galleries.status','active')
        ->select('users.name','project_galleries.id','project_galleries.title','project_galleries.names','project_galleries.image')
        ->get();
        return view('front.project', compact('show_gallery','show_project_gallery'));
    }
}
