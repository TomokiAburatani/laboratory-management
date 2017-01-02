<?php
 
namespace App\Http\Controllers;
 
use App\Computer;
use App\User;
use Session;
use Request;
use Redirect;

class ComputersController extends Controller
{
    protected $comp;
    protected $user;
 
    public function __construct(Computer $comp, User $user)
    {
        $this->comp = $comp;
	
        $this->user = $user;
    }

 
    public function getIndex()
    {

      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');

      if($login_frag === TRUE){

	$comps = $this->comp->all();
	return view('page.computers-page')->with(compact('comps', 'login_frag', 'login_name'));
      } else {
	return Redirect::to('/');
      }
    }

    
}