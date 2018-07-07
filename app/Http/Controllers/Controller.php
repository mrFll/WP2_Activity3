<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Support\Facades\Auth;
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
    * add new product to database page
    */
    public function addProduct(){
        return view('addProduct');
    }

    /**
     * handle received data from client to save in database
     * @param Request $request
     * @return string
     */
    public function handleNewProduct(Request $request){

        // initialize variables with data that posted to server
        $title = $request->input('product_title');
        $price = $request->input('product_price');
        $description = $request->input('product_description');
        $published = $request->input('product_published');

        $product = new products;

        $product->title = $title;
        $product->price = $price;
        $product->description = $description;

        $user = Auth::user();
        $product->created_by = $user["id"];

        if($published === ''){
            $product->published = true;
        }else{
            $product->published = false;
        }


        $product->save();

        return redirect()->to('/product');
    }

    public function showProducts(){

        $products = products::all();

        return view('showProduct' , [
            "products" => $products
        ]);
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
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
