<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mainnews;
use App\Models\News;

class FrontStageController extends Controller
{
    public function index(){
        $mainnews = Mainnews::orderBy('id','desc')->take(1)->get();
        return view('frontstage.index',compact('mainnews'));
    }

    public function news(){
        $mainnews = Mainnews::orderBy('id','desc')->take(1)->get();
        $news = News::orderBy('id','desc')->get();
        return view('frontstage.news',compact('mainnews','news'));
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
