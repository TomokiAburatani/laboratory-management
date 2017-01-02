<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Session;
use Request;
use Redirect;
use App\User;
use App\Ip;


$login_id = Session::get('login_id');
$login_frag = Session::get('login_frag');
if(isset($loigin_id) && isset($login_frag)){
View::share("login_id", $login_id);
View::share("login_frag", $login_frag);
}



Route::get('/', 'TopPageController@getIndex');
Route::get('login', 'SessionController@postIndex');


Route::post('login-operate', 'SessionController@postIndex');
Route::get('logout', 'SessionController@getLogout');

Route::get('signup-form', function(){
    $check_frag = "rewrite";
    return view('page.signup-page')->with(compact('check_frag'));
  });
Route::post('signup-check', 'SessionController@postSignupCheck');



Route::get('signup-check', function(){
    $check_frag = "rewrite";
    return view('page.signup-page')->with(compact('check_frag'));
  });

Route::get('books', 'BooksController@getIndex');
Route::get('computers', 'ComputersController@getIndex');
Route::get('users', 'UsersController@getIndex');
Route::get('activities', 'ActivitiesController@getIndex');
Route::get('ips', 'IpsController@getIndex');

Route::get('add-book', function(){
    
      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');

      $check_frag = "rewrite";

      if($login_frag === TRUE){
	return view('page.add-book-page')->with(compact('login_frag', 'login_name', 'check_frag'));
      } else {
	return Redirect::to('/');
      }
  });
Route::post('add-book', 'BooksController@postAddBook');