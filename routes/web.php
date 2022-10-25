<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\EventsController;
use App\Http\Controllers\frontend\MusicController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\VideosController;

use App\Http\Controllers\DataController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('contact',[ContactController::class,'index']);
Route::get('events',[EventsController::class,'index']);
Route::get('music',[MusicController::class,'index']);
Route::get('news',[NewsController::class,'index']);
Route::get('videos',[VideosController::class,'index']);


Route::get('data',[DataController::class,'index']);