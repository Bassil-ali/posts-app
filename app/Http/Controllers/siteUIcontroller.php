<?php

namespace App\Http\Controllers;
use\App\Setting;
use\App\Post;
use\App\Tag;
use\App\Category;
use Illuminate\Http\Request;

class siteUIcontroller extends Controller
{






    public function index()
    {

        $blog_name= Setting::latest()->first()->blog_name;
        $categories=Category::latest()->get();
        $tags =Tag::latest()->get();
        $post=Post::latest()->get();
        return view('index',compact('blog_name','categories','tags','post'));



    }



    public function showPost($slug)
    {
$next_page=$prev_page=null;
$post = Post::where('slug' , $slug)->first();
If($post){
$next_page = Post::where('id' , '>' ,$post->id)->min('id'); $prev_page = Post::where('id' , '<' ,$post->id)->max('id');}

        return view('posts.show')

                             ->with('tags' , Tag::all() )
                             ->with('post' , $post)
                             ->with('next' , Post::find($next_page))
                             ->with('prev' , Post::find($prev_page))
                            ->with('title' , $post->title)
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )
                            ->with('categories' , Category::all() )   ;

    }



    public function category($id)
    {

        $category      = Category::find($id) ;


        return view('categories.category')
                            ->with('tags' , Tag::all() )
                            ->with('title' , $category->name)
                            ->with('categories' , Category::all() )
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )
                            ->with('name' , $category->name )
                            ->with('category' , $category )    ;

    }



    public function tag($id)
    {

        $tag      = Tag::find($id) ;


        return view('tags.tags')

                            ->with('title' , $tag->tag)
                            ->with('categories' , Category::all() )
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )
                            ->with('name' , $tag->name )

                            ->with('tag' , $tag )    ;

    }



}
