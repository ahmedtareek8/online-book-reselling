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
    	$newbook->Bname = Request("name");
    	$newbook->Bauther = Request("auther");
    	$newbook->Bpicture = Request("fileToUpload");
        $newbook->Bprice = Request("price");
        $newbook->Bcount = Request("count");
    	$newbook->save();

    	//echo "DONE";
    	return redirect ("/showBooks");
    }
    public function showingbook (){
    	$Books = book::all();
    	return view ("bookshow",compact("Books"));


    }
}
