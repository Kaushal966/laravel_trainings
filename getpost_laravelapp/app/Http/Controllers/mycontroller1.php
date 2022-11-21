<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller1 extends Controller
{
    //
    public function index(){

        return view('home');

    }

    public function about(){

        return view('about');

    }

    public function contact(){

        return view('contact');

    }

    public function process(request $request){

          $name = $request->input('txt1');
          $age  = $request->input('txt2');

          echo "A value is $name and B value is $age";
    }
}
