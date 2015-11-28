<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

/**
* 
*/
class DashController extends Controller
{
	public function __construct()
{
    $this->middleware('auth');
}

	public function show()
	{
		return view('dashboard.index');
	}
}