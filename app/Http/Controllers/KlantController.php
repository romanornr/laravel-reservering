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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $klanten = Klant::orderBy('id' ,'asc')->paginate(5);
        return view('dashboard.klantenlijst',
        	compact('klanten'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $klant = Klant::find($id);
        return view('dashboard.klant', compact('klant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klant = Klant::find($id);
        return view('dashboard.klantedit', compact('klant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();
        $klant = Klant::findOrFail($id)->fill($input)->save();
        return redirect('dashboard');

        //$klant->voornaam ='Ro';
        //$klant->fill($input);
        //$klant->save();
       // $input->fill($input)->save($klant);

       // dd(\Request::input());
       // 
        //$input = $request->all();
        //$klant->save();
    }

    /**n 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klant = Klant::find($id);
        $klant->delete();
        return redirect()->route('dashboard.index');
    }
}
