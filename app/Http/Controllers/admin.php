<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book ;
use App\booksold ;

class admin extends Controller
{
     public function showingbooks(){

    	$Books = book::all();
    	$Bookssold = booksold::all();

    	return view ("adminshow",compact("Books","Bookssold"));

    }
}
