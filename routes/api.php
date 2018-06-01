<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// show developer name
Route::get('/devname', function(){
  return "Parham Fallah";
});

// show today
Route::get('/date', function(){
  $date =  getdate();
  return "<h3>today is <b>" . $date['weekday'] . "</b></h3> " . $date['mday'] . "/" . $date['mon'] . "/" . $date['year'] ;
});

// show valid names that initialize in UsersController, showValidNames funciton
Route::get('/vname' , 'UsersController@showValidNames');
