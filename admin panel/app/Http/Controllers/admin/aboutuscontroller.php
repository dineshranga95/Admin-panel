<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\aboutus;
use Illuminate\Http\Request;

class aboutuscontroller extends Controller
{
    public function aboutus(){
        return view('admin.aboutus');
    }
    public function save(Request $request){

        $aboutus=new aboutus;

        $aboutus->title=$request->input('title');
        $aboutus->subtitle=$request->input('subtitle');
        $aboutus->description=$request->input('description');
        $aboutus->save();
        return redirect('/aboutus')->with('status','Data Added For About Us' );
    }
}  
