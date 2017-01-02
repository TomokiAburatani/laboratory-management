<?php
 
namespace App\Http\Controllers;
 
use App\Activities;
use App\User;
use Session;
use Request;
use Redirect;

class ActivitiesController extends Controller
{
    protected $act;
    protected $user;
 
    public function __construct(Activities $act, User $user)
    {
        $this->act = $act;
	
        $this->user = $user;
    }

 
    public function getIndex()
    {

      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');

      if($login_frag === TRUE){

	$acts = $this->act->all();
	return view('page.activities-page')->with(compact('acts', 'login_frag', 'login_name'));
      } else {
	return Redirect::to('/');
      }
    }

    
}