<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;
//use DB;


class usercontroller extends Controller
{
  

    //for registration
    public function insertuserdata(request $req){

      $User=new user;
      $User->Uname=$req->name;
   	  $User->Uusername=$req->username;
      $User->Upassword=$req->password;
      if($req->usertype=="buyer"){
        $User->Utype=1;
      }elseif($req->usertype=="seller"){
        $User->Utype=2;
      }
      $User->save();
      return redirect("/login");
    }

    
    

}
