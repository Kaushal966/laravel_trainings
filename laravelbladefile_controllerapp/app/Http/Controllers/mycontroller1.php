<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller1 extends Controller
{
    //bladefile pages method/function

    public function index(){
    
        return view('home');
    
    }
    
    public function aboutus(){
    
        return view('aboutus');
    
    }

    public function contactus(){
    
        return view('contactus');
    
    }
}