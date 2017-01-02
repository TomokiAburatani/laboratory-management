<?php
 
namespace App\Http\Controllers;

use Session;
use Request;
use Redirect;
use DB;
use App\Book;
 
class BooksController extends Controller
{
    protected $book;
 
    public function __construct(Book $book)
    {
        $this->book = $book;
    }
 
    public function getIndex()
    {
      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');


      if($login_frag === TRUE){
	$booking = $this->book->all();
	
	return view('page.books-page')->with(compact('booking', 'login_frag', 'login_name'));
      } else {
	return Redirect::to('/');
      }
    }

    public function postAddBook()
    {
      $login_frag = Session::get('login_frag');
      $login_name = Session::get('login_name');

      if($login_frag === TRUE){


	$check_frag = Request::input('check_frag');
	if($check_frag === "0"){
	  
	  $title = Request::input('title');
	  $isbn = Request::input('isbn');
	  $number = Request::input('number');
	  $timestamp = date("Y-m-d H:i:s");
	  
	  $book_id = $this->book->where('isbn', "")->first()->id;
	  $book_id++;
	  $this->book->insert(['title' => $title,
	  		       'isbn' => $isbn,
	  		       'number' => $number,
	  		       'created_at' => $timestamp,
	  		       'updated_at'=> $timestamp]);
	  return view('page.add-book-page')->with(compact('title', 'isbn', 'number', 'login_frag', 'login_name', 'check_frag'));
	} else {


	
	  return view('page.add-book-page')->with(compact('login_frag', 'login_name', 'check_frag'));
	}
      } else {
	return Redirect::to('/');
      }
    }
}