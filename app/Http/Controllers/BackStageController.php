<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackStageController extends Controller
{
    public function login(){
        return view('backstage.login');
    }
    public function checklogin(Request $request){
        dd($request->all());
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
}
