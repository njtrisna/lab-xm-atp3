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
}
