<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
Use App\Klant;

class BookingController extends Controller
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
    public function create($klant_id)
    {
        // return geeft een waarde terug nadat je return hebt gedaan verwacht de functie niks meer dus kapt de functie. alles na return wordt niet uitgevoerd.
        //return $klant_id; zo moet het werken
        return view('dashboard.booking',compact('klant_id'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $booking = new Booking([
        'onderwerp' => $request->get('onderwerp'),
        'bestemming' => $request->get('bestemming'),
        'aantal' => $request->get('aantal'),
        'vertrek' => $request->get('vertrek'),
        'terug' => $request->get('terug'),
        'toelichting' => $request->get('toelichting')
        ]);

        Klant::find($klant_id)->booking()->save($booking);

        //$klant_id->booking()->save($booking);
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
