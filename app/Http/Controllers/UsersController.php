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
}
