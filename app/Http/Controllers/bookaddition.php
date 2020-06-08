<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book ;
use Illuminate\Support\Facades\Redirect;


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
    	return Redirect()->back()->with(['message' => 'book added sucssesfuly']);
    }
    public function showingbook (){
    	$Books = book::all();
    	return view ("bookshow",compact("Books"));


    }
}
