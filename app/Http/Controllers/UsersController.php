<?php
 
namespace App\Http\Controllers;

use Session;
use Request;
use Redirect;

use App\User;
 
class UsersController extends Controller
{
    protected $user;
 
    public function __construct(User $user)
    {
        $this->user = $user;
    }
 
    public function getIndex()
    {
      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');

      if($login_frag === TRUE){
	$user_list = $this->user->all();
	return view('page.user-list-page')->with(compact('user_list', 'login_frag', 'login_name'));

      } else {
	return Redirect::to('/');
      }
    }

}