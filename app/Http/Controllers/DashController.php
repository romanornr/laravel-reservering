<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use App\Aanvragen;

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
		//with -> Laravel N+1 problem -> sql query
		$aanvragen = Aanvragen::with('klant')->orderBy('id', 'asc')->get();
		return view('dashboard.index',
			compact('aanvragen'));
	}
}