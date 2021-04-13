<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticpagecontroller extends Controller
{
    //
    public function homepage(){
        return view('staticpages.homepages');
    }
    public function about(){
        return view('staticpages.about');
    }
    public function services(){
        return view('staticpages.services');
    }
    public function contact(){
        return view('staticpages.contact');
    }
    public function aboutus(){
        return view('staticpages.about us');
    }
}
