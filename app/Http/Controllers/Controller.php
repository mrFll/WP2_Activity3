<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
    * generate home page
    */
    public function homePage(){
      return view('welcome');
    }

    /**
    * numbers page
    */
    public function numbers(Request $request){

      $number = $request->input('number');
      if($number == null){
        return view('numbers', ['number' => 'please send your number by url like: .../number?number=12']);
      }else{
        return view('numbers', ['number' => $number]);
      }
    }

    /**
    * add new week
    */
    public function addNewWeek(){
      return view('addNewWeek');
    }

    /**
    * get data from user by addNewWeek view by POST method and
    * if user send data, show it in *** view
    */
    public function handleNewWeekData(Request $request){

      // initialize variables with data that posted to server
      $start = $request->input('starting_date');
      $end = $request->input('ending_date');
      $numb = $request->input('week_numb');
      $titles = explode("\n",$request->input('week_titles'));

      //validation data
      $validatedData = $request->validate([
        'starting_date' => 'required|date',
        'ending_date' => 'required|date',
        'week_numb' => 'bail|required|numeric',
        'week_titles' => 'required',

      ]);


      return view('showNewWeek',[
        'start' => $start,
        'end' => $end,
        'numb' => $numb,
        'titles' => $titles]);
    }
}
