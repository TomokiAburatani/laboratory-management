<?php
 
namespace App\Http\Controllers;

use Session;
use Request;
use Redirect;

use App\Ip;
 
class IpsController extends Controller
{
    protected $ip;
 
    public function __construct(Ip $ip)
    {
        $this->ip = $ip;
    }
 
    public function getIndex()
    {
      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');


      if($login_frag === TRUE){
	$ip_list = $this->ip->all();
	return view('page.ips-page')->with(compact('ip_list', 'login_frag', 'login_name'));
      } else {
	return Redirect::to('/');
      }
    }

}