<?php

namespace App\Http\Controllers;


use App\Post;
use App\Profile;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{

    public function index() {
        $profiles =Profile::where('user_id',auth()->user()->id)->get();
        $post =Post::all();

        return   view('home',compact('profiles'));

    }
}
