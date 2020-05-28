<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Feed;

class FeedController extends Controller
{
    //
    public function addFeedForm(){
        if(in_array('Can add feeds', auth()->user()->getUserPermisions())){
        return view('admin.feed-form');
        }else{
            return redirect('/404');
        }
    }
    public function editFeedForm($id){
        if(in_array('Can edit feeds', auth()->user()->getUserPermisions())){
        $edit_feeds =Feed::where('id',$id)->get();
        return view('admin.edit-feed-form',compact('edit_feeds'));
        }else{
            return redirect('/404');
        }
    }
    public function createFeed(Request $request){
        if(empty($request->feed_type)){
            return Redirect()->back()->withInput()->withErrors("Village cannot be empty");
        }
        if(Feed::where('feed_type', $request->feed_type)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Feed Type already exists.');

        }
        if(empty($request->prescription)){
            return Redirect()->back()->withInput()->withErrors("Prescription cannot be empty");
        }
        if(Feed::where('prescription', $request->prescription)->exists())
        {
            return Redirect()->back()->withInput()->withErrors('Prescription already exists.');

        }
        Feed::create(array(
            'user_id'=>Auth::user()->id,
            'feed_type'=>$request->feed_type,
            'prescription'=>$request->prescription
        ));
        return Redirect()->back()->with('message',"Feed details has been Added Succesfully");
    }
    public function displayFeed(){
        $show_all_feeds =Feed::join('users','feeds.user_id','users.id')
        ->where('feeds.status','active')
        ->select('users.name','feeds.id','feeds.prescription','feeds.feed_type')
        ->paginate('10');
        return view('admin.feeds-table',compact('show_all_feeds'));
    }
    public function searchFeed(Request $request){
        $show_all_feeds =Feed::join('users','feeds.user_id','users.id')
        ->where('feeds.status','active')
        ->where('feeds.feed_type',$request->feed_type)
        ->orwhere('users.name',$request->feed_type)
        ->orwhere('feeds.prescription',$request->feed_type)
        ->select('users.name','feeds.id','feeds.prescription','feeds.feed_type')
        ->paginate('10');
        return view('admin.feeds-table',compact('show_all_feeds'));
    }
    public function updateFeedInformation($id, Request $request){
        Feed::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'feed_type'=>$request->feed_type,
            'prescription'=>$request->prescription
        ));
        return Redirect()->back()->with('message',"Feed details has been updated Succesfully");
    }
    public function deleteFeed($id){
        Feed::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("Feed details has been deleted Succesfully");
    }
}
