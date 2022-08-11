<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\students;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/curd",function(){
  return view("curd");
});
Route::get('/insert',[students::class,'posts']);
Route::get('don',[students::class,'fetch']);
