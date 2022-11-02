<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontStageController;
use App\Http\Controllers\BackStageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[FrontStageController::class,'index']);
Route::get('/news',[FrontStageController::class,'news']);
Route::get('/room5',[FrontStageController::class,'room5']);
Route::get('/room7',[FrontStageController::class,'room7']);
Route::get('/booking',[FrontStageController::class,'booking']);
Route::get('/story',[FrontStageController::class,'story']);
Route::get('/location',[FrontStageController::class,'location']);



Route::get('/admin/login',[BackStageController::class,'login']);
Route::get('/admin/login/check',[BackStageController::class,'checklogin']);
Route::get('/admin/main-news-list',[BackStageController::class,'mainList']);
Route::get('/admin/add-main-news',[BackStageController::class,'mainAdd']);
Route::get('/admin/news-list',[BackStageController::class,'newsList']);
Route::get('/admin/add-news',[BackStageController::class,'newsAdd']);

Route::post('/admin/addnews',[BackStageController::class,'addnews']);
Route::post('/admin/addmainnews',[BackStageController::class,'addmainnews']);


