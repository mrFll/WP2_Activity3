<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function user(){
      return "this is user page made by controller";
    }

    public function showValidNames(){

      $validName = ['parham', 'maziar', 'behrad' , 'farzam'];
      $result = "";
      foreach ($validName as $vName) {
        $result = $result . " " .  $vName;
      }
      return $result ." are valid names";
    }

    /**
    *      handle the request - show query string in view - ex1
    */
    public function showName(Request $request){
      $name = $request->input('name');

      // check if user doesn't enter the name in url
      if($name == null){
        return view('showName', ['name' => 'please send your name by url like: .../getname?name=parham']);
      }else{
        return view('showName', ['name' => $name]);
      }

    }
}
