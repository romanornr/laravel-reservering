<?php

namespace App\Http\Controllers;

use App\Aanvragen;
use Auth;

/**
 * 
 */
class DashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //with -> Laravel N+1 problem -> sql query
        $aanvragen = Aanvragen::with('customer')->orderBy('id', 'desc')->get();

        return view('dashboard.index',
            compact('aanvragen'));
    }

    public function show($id)
    {
    }
}
