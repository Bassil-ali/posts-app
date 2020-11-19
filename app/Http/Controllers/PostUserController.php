<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostUserController extends Controller
{
    public function index(){
        $posts_user =Post::where('user_id',auth()->user()->id)->get();
        //=$revs = Rev::where([  ['month', '=', '$month_val'] , ['year', '<>', '$year']  ])->get();
        return   view('posts.home',compact('posts_user'));
    }
}
