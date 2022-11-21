<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller1 extends Controller
{
    //
    public function index(){
        
        echo "home page";
    }
    
    public function about(){
        
        echo "About us page";
    }

    public function contact(){
        
        echo "contact us page";
    }
}
