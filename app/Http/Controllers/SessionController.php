<?php
 
namespace App\Http\Controllers;
 
use Session;
use Request;
use Redirect;
use DB;
use View;
use App\User;
 

class SessionController extends Controller
{
  protected $user;
 
  public function __construct(User $user)
  {
    $this->user = $user;
  }
 

  public function postIndex()
  {
    // useridの値があるときだけセッションを保存
    if (Request::has('userid') && Request::has('password')) {
      $req_id = Request::input('userid');
      
      $uid = $this->user->where('user_id', $req_id)->first();

      if(!empty($uid)){
	$upass= $this->user->where('user_id', $req_id)->first()->password;
	if($upass === Request::input('password')){    

	  $uemail= $this->user->where('user_id', $req_id)->first()->email;
	  $ufirst_name_ja = $this->user->where('user_id', $req_id)->first()->first_name_ja;
	  $ulast_name_ja = $this->user->where('user_id', $req_id)->first()->last_name_ja;
	  $ufirst_name = $this->user->where('user_id', $req_id)->first()->first_name;
	  $ulast_name = $this->user->where('user_id', $req_id)->first()->last_name;

	  Session::put('login_frag', TRUE);
	  Session::put('userid', $uid);
	  Session::put('ufirst_name_ja', $ufirst_name_ja);
	  Session::put('ulast_name_ja', $ulast_name_ja);
	  Session::put('ufirst_name', $ufirst_name);
	  Session::put('ulast_name', $ufirst_name);
	  Session::put('umail', $uemail);

	  Session::put('login_name', $ulast_name_ja." ".$ufirst_name_ja);

	}
      }
      else {
	$erroe_message = "TRUE";
	return view('page.login-page');
      }
    }
    else {
      $erroe_message = "TRUE";
      return view('page.login-page');
    }
    return Redirect::to('/');
  }

  
  public function getLogout()
  {
    Session::flush();
    
    Session::put('login_frag', FALSE);
    
    return Redirect::to('/');
  }

  
public function postSignupCheck()
  {
    $uid = Request::input('uid');
    $ulast_name_ja = Request::input('ulast_name_ja');
    $ufirst_name_ja = Request::input('ufirst_name_ja');
    $ulast_name = Request::input('ulast_name');
    $ufirst_name = Request::input('ufirst_name');
    $uemail = Request::input('uemail');
    $upassword = Request::input('upassword');
    $upassword2 = Request::input('upassword2');


    $check_frag = "check";

    $cfrag = Request::input('check_frag');
    if($cfrag === "1"){
      $check_frag = "up";

      
      if($upassword === $upassword2){
	$udata = $this->user->all();
	$cover_frag = FALSE;
	foreach($udata as $ud){
	  if($ud->user_id === $uid){
	    $cover_frag = TRUE;
	    break;
	  }
	}
	if($cover_frag === FALSE){
	  $timestamp = date("Y-m-d H:i:s");
	  $this->user->insert(['user_id' => $uid,
			       'last_name' => $ulast_name,
			       'first_name' => $ufirst_name,
			       'last_name_ja' => $ulast_name_ja,
			       'first_name_ja' => $ufirst_name_ja,
			       'email' => $uemail,
			       'password' => $upassword,
			       'updated_at'=> $timestamp]);

	  
	} else {
	  $check_frag = "rewrite";
	  return view('page.signup-page')->with(compact('uid', 'ulast_name_ja', 'ufirst_name_ja', 'ulast_name', 'ufirst_name', 'uemail', 'upassword', 'upassword2', 'check_frag'));
	}
      } else {
	$check_frag = "rewrite";
	return view('page.signup-page')->with(compact('uid', 'ulast_name_ja', 'ufirst_name_ja', 'ulast_name', 'ufirst_name', 'uemail', 'upassword', 'upassword2', 'check_frag'));
      }

      
    } elseif($cfrag === "2"){
      $check_frag = "rewrite";
    } elseif($cfrag === "0"){
      $check_frag = "check";
    }
    

    return view('page.signup-page')->with(compact('uid', 'ulast_name_ja', 'ufirst_name_ja', 'ulast_name', 'ufirst_name', 'uemail', 'upassword', 'upassword2', 'check_frag'));

  }
}