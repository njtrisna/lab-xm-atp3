<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\StudentRequest;

class customerController extends Controller
{
    public function index(Request $req){
		return view('customer.index');
	}
	public function add(Request $req){
		return view('customer.registration');
	}
	public function create(Request $req){



		
		$user = new User();
    	$user->username = $req->uname;
    	$user->password = $req->password;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->type = "customer";
    	$user->save();

		return redirect('/login');
	}
}
