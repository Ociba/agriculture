<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Category;

class CategoryController extends Controller
{
    //
    public function AddCategoryForm(){
        return view('admin.add-category-form');
    }
    public function editCategoryForm($id){
        $edit_category =Category::where('id',$id)->get();
        return view('admin.edit-category-form', compact('edit_category'));
    }
    public function createCategory(Request $request){
        if(empty($request->category)){
            return Redirect()->back()->withInput()->withErrors("Category cannot be empty");
        }
        if(Category::where('category', $request->category)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Category already exists.');

        }
        Category::create(array(
            'user_id'=>Auth::user()->id,
            'category'=>$request->category
        ));
        return Redirect()->back()->with('message',"Category has been created Successfully");
    }
    public function displayCategory(){
        $show_category =Category::join('users','categories.user_id','users.id')
        ->where('categories.status','active')
        ->select('categories.category','categories.id','users.name')
        ->paginate('10');
        return view('admin.category-table', compact('show_category'));
    }
    public function searchCategory(Requst $request){
        $show_category =Category::join('users','categories.user_id','users.id')
        ->where('categories.status','active')
        ->where('categories.category',$request->category)
        ->orwhere('users.name',$request->category)
        ->select('categories.category','categories.id','users.name')
        ->paginate('10');
        return view('admin.category-table', compact('show_category'));
    }
    public function updateCategoryInformation($id, Request $request){
        Category::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'category'=>$request->category
        ));
        return redirect('/display-categories')->withErrors("Your Category details has been successfully updated");
    }
    public function deleteCategory($id){
        Category::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Category has been deleted successfully");
    }
}
