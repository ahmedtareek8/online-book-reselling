<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book ;

class bookaddition extends Controller
{
    //
    public function addbook(){
    	return view ("addbookview");

    }
    public function insertbook(Request $request){
    	$newbook = new book;
    	$newbook->bookId = Request("Id");
    	$newbook->bookname = Request("name");
    	$newbook->bookauther = Request("auther");
    	$newbook->image = Request("fileToUpload");
    	$newbook->save();

    	//echo "DONE";
    	return redirect ("/showBooks");
    }
    public function showingbook (){
    	$Books = book::all();
    	return view ("bookshow",compact("Books"));


    }
}
