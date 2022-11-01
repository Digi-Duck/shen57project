<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontStageController extends Controller
{
    public function index(){
        return view('frontstage.index');
    }

    public function news(){
        return view('frontstage.news');
    }


    public function location(){
        return view('frontstage.location');
    }

    public function story(){
        return view('frontstage.story');
    }
    public function room5(){
        return view('frontstage.room5');
    }
    public function room7(){
        return view('frontstage.room7');
    }
    public function booking(){
        return view('frontstage.booking');
    }

}
