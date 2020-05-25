<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BlogDetails;
use App\Comment;
use App\Others;
use App\RecentNews;
use App\Reply;

class BlogController extends Controller
{
    //
    public function displayBlog(){
        $display_blog_detail =BlogDetails::join('users','blog_details.user_id','users.id')
        ->where('blog_details.status','active')
        ->select('users.name','blog_details.title','blog_details.statement','blog_details.image',
        'blog_details.facebook','blog_details.google','blog_details.twitter','blog_details.image','blog_details.created_at')
        ->get();
        $display_comments =Comment::where('status','active')->get();
        $display_others =Others::join('users','others.user_id','users.id')
        ->where('others.status','active')
        ->select('others.title','others.number','users.name','others.id')
        ->get();
        $show_recent_news =RecentNews::join('users','recent_news.user_id','users.id')
        ->where('recent_news.status','active')
        ->select('recent_news.title','recent_news.image','users.name','recent_news.id')
        ->get();
        $show_reply =Reply::join('comments','replies.comment_id','comments.id')
        ->where('replies.status','active')
        ->select('replies.reply','replies.photo','comments.comment','replies.id')
        ->get();
        return view('front.blog', compact('display_blog_detail','display_comments','display_others',
        'show_recent_news','show_reply'));
    }
}
