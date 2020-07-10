<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingsController extends Controller
{


    public function __construct(){
       }




    public function index(){
        return view('settings.settings')->with('settings', Setting::first());
    }



    public function store(Request $request){
 
        $this->validate($request,[
            "blog_name"    => "required",
            "phone_number"  => "required",
            "blog_email"  => "required" ,
            "address"  => "required" 
            
        ]);
$setting = Setting::create([
            'blog_name' => $request->blog_name,
            'phone_number' => $request->phone_number,
            'blog_email' => $request->blog_email,
             'address'  =>  $request->address,
        ]);


        
        return redirect()->back();


    }
}
