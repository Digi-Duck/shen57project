<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FilesController;
use App\Models\Mainnews;
use App\Models\News;

class BackStageController extends Controller
{
    public function login(){
        return view('backstage.login');
    }
    public function checklogin(Request $request){
        //
    }


    public function mainList(){
        return view('backstage.main-news-list');
    }
    public function mainAdd(){
        return view('backstage.add-main-news');
    }
    public function newsList(){
        return view('backstage.news-list');
    }
    public function newsAdd(){
        return view('backstage.add-news');
    }


    public function addnews(Request $request){
        $title = $request->title;
        $date = $request->date;
        $content = $request->content;
        $img = $request->img;

        $path = FilesController::imgUpload($img, '/news');

        $result = News::create([
            'title' => $title,
            'date' => $date,
            'content' => $content,
            'img_path' => $path,
        ]);

        $newslist = News::orderBy('id','desc')->get();

        return view('backstage.news-list',compact('newslist'));
    }
    public function addmainnews(Request $request){
        $title = $request->title;
        $date = $request->date;
        $content1 = $request->content1;
        $content2 = $request->content2;
        $img = $request->img;

        $path = FilesController::imgUpload($img, '/mainnews');

        $result = Mainnews::create([
            'title' => $title,
            'date' => $date,
            'content' => $content1,
            'content2' => $content2,
            'img_path' => $path,
        ]);


        return view('backstage.main-news-list');
    }
}
