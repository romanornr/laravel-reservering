<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
Use App\Klant;

class KlantController extends Controller
{
	private $klant;

	public function __construct(Klant $klant)
{
    $this->middleware('auth');
}

    public function index()
    {
       $klanten = Klant::orderBy('id' ,'asc')->paginate(5);
        return view('dashboard.klantenlijst',
        	compact('klanten'));
    }


    public function create()
    {
        return view('dashboard.klantcreate');
    }

    public function store(Request $request)
    {
        $klant = Klant::create([
        'geslacht' => $request->get('geslacht'),
        'voornaam' => $request->get('voornaam'),
        'achternaam' => $request->get('achternaam'),
        'email' => $request->get('email'),
        'telefoonnummer' => $request->get('telefoonnummer')
        ]);
        \Session::flash('flash_message', 'De klant is aangemaakt!');
        return redirect('dashboard/klanten');
    }


    public function show($id)
    {
        $klant = Klant::find($id);
        $bookings = Klant::find($id)->booking()->get();
        return view('dashboard.klant', compact('klant', 'bookings'));
    }


    public function edit($id)
    {
        $klant = Klant::find($id);
        return view('dashboard.klantedit', compact('klant'));
    }


    public function update($id, Request $request)
    {
        $input = $request->all();
        $klant = Klant::findOrFail($id)->fill($input)->save();
        \Session::flash('flash_message', 'De klantgegvens zijn bijgwerkt!');
        return redirect('dashboard/klanten');
    }


    public function destroy($id)
    {
        $klant = Klant::find($id)->delete();
        \Session::flash('flash_message', 'De klant is verwijderd uit de database!');
        return redirect('dashboard/klanten');
    }
}