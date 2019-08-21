<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   
	public function index(){	

		return view('login.index');
	}

	public function verify(Request $req){	
		
		

		$result = DB::table('admininfo')->where('username', $req->uname)
				->where('password', $req->password)
				->get();
		
		

		if(count($result) > 0)
		{

			$req->session()->put('username', $req->uname);
			$req->session()->put('type', $result[0]->type);
			if($result[0]->type=='admin')
			{
				return redirect()->route('home.index');
			}
			elseif ($result[0]->type=='customer') 
			{
				return redirect()->route('customer.index');
			}
			

			
		}
		else
		{
			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.index');
			//return view('login.index');
		}
	}
}
