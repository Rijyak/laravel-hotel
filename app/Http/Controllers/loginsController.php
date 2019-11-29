<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class loginsController extends Controller
{
    //

   	 public function login(Request $req){
		  	$username = $req->input('username');
		  	$password = $req->input('password');

		    $checkLogin = DB::table('users') -> where(['username'=>$username,'password'=>$password])-> get();
		    if (count($checkLogin) >0) {
		    		echo "Login Sucessful";

		    		print_r($req->input());
		    }
		    else{
		    	
		    	return view('admins');
		    }
		}
}