<?php
//this controller for user registration and login
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Redirect;

class users extends Controller
{
    //for registration
    public function insertuserdata(request $req){

      $User=new user;
      $User->Uname=$req->name;
   	  $User->Uusername=$req->username;
      $User->Upassword=$req->psw;
      if($req->usertype=="buyer"){
        $User->Utype=1;
      }elseif($req->usertype=="seller"){
        $User->Utype=2;
      }
      $User->save();
      return redirect("/login");
    }


     public function login(request $req){

     	$data=user::all();
          $check=0;
     	foreach ($data as $key => $i) {
     	  if($req->uname==$i->Uusername){
     	   if($req->password==$i->Upassword){
     	   	 $check=1;
     	    if($i->Utype==1){
     	      return redirect("/showBooks");
     	    }elseif($i->Utype==2){
     	      return redirect("/useraddbook");
           }else{
           	  return redirect("/showadminhome");
           }
     	}

      }
    }
       return Redirect()->back()->with(['message' => 'invalid user name or password']);
    
}

 public function logout(){
 	 return redirect("/login");
 }
 

}
