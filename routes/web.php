<?php

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

/*
// root route
Route::get('/', function () {
    return view('mainTemplate');
})->name('root');



// view route
Route::view('/profile', 'profile')->name('profile');

// use optional parameters in the route result
Route::get('/profile/{name?}', function($name = null){
  return $name . " profile file";
});

// number route
Route::get('/number', function(){
  return "please enter your number between 1 to 4";
});

// regular expression constraints for numb route
Route::get('/number/{numb}', function($numb){
  return "your number is " . $numb;
})->where('numb', '[1-4]+');

// dashboard Route
Route::get('/dashboard', function(){
  return view('dashboard');
});

// redirect redash url to dashboard url
Route::redirect('/redash', 'dashboard', 301);

// route pointed to controller class
Route::get('/user', 'UsersController@user');
*/
//---------------------- Activity 4 ------------------------




// ex 2 - main page template
Route::get('/', 'Controller@homePage');

// product routes
Route::get('/product', 'Controller@showProducts');
Route::get('/product/add', 'Controller@addProduct');
Route::post('/product/add', 'Controller@handleNewProduct');

// add new course
Route::get('/course/add', 'Controller@addNewWeek');
Route::post('/course/add', 'Controller@handleNewWeekData');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// logging out route -> redirect to home
Route::get('/logout' , function (){
    \Illuminate\Support\Facades\Auth::logout();
   return redirect('/');
});
