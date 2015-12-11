<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Aanvragen;
use App\Klant;

class TravelrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reisrequest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klant = Klant::create([
        'geslacht' => $request->get('geslacht'),
        'voornaam' => $request->get('voornaam'),
        'achternaam' => $request->get('achternaam'),
        'email' => $request->get('email'),
        'telefoonnummer' => $request->get('telefoonnummer')
        ]);
        
        /*
            Geen Aanvragen::create
            maar new Aanvragen
        */
            
        $aanvragen = new Aanvragen([
        'onderwerp' => $request->get('onderwerp'),
        'bestemming' => $request->get('bestemming'),
        'aantal' => $request->get('aantal'),
        'vertrek' => $request->get('vertrek'),
        'terug' => $request->get('terug'),
        'toelichting' => $request->get('toelichting')
        ]);

        $klant->aanvragen()->save($aanvragen);
        \Session::flash('flash_message', 'Uw aanvraag is verzonden en er word zo snel mogelijk contact met u opgenomen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
