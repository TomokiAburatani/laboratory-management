<?php
namespace App\Http\Controllers;


use Session;
use Request;
use Redirect;
use App\User;
use App\Book;
use App\Activities;
use App\Computer;

class TopPageController extends Controller
{
  protected $user, $book, $act, $comp;
 
  public function __construct(User $user, Book $book, Activities $act, Computer $comp)
    {
        $this->user = $user;
	$this->book = $book;
	$this->act = $act;
	$this->comp = $comp;
    }
 
    public function getIndex()
    {

      $login_frag = Session::get('login_frag');
      $login_id = Session::get('userid');
      $first_name = Session::get('ufirst_name');
      $last_name = Session::get('ulast_name');
      $first_name_ja = Session::get('ufirst_name_ja');
      $last_name_ja = Session::get('ulast_name_ja');
      $uemail = Session::get('umail');
      $login_name = $last_name_ja. " " .$first_name_ja ;

      $user_list = $this->user->all();
      $booking = $this->book->all();
      $acts = $this->act->all();
      $comps = $this->comp->all();

	
      return view('page.top-page')->with(compact('login_frag', 'login_id', 'login_name', 'last_name', 'first_name', 'last_name_ja', 'first_name_ja', 'uemail', 'booking', 'acts', 'comps'));
	
    }
}