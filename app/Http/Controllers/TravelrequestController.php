<?php

namespace App\Http\Controllers;

use App\Aanvragen;
use App\Customer;
use Auth;
use Illuminate\Http\Request;

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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create([
        'gender'    => $request->get('gender'),
        'firstname' => $request->get('firstname'),
        'lastname'  => $request->get('lastname'),
        'email'     => $request->get('email'),
        'phone'     => $request->get('phone'),
        ]);

        /*
            Geen Aanvragen::create
            maar new Aanvragen
        */

        $aanvragen = new Aanvragen([
        'onderwerp'   => $request->get('onderwerp'),
        'bestemming'  => $request->get('bestemming'),
        'aantal'      => $request->get('aantal'),
        'vertrek'     => $request->get('vertrek'),
        'terug'       => $request->get('terug'),
        'contact'     => $request->get('contact'),
        'toelichting' => $request->get('toelichting'),
        ]);

        $customer->aanvragen()->save($aanvragen);
        \Session::flash('flash_message', 'There is a new travel request!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->middleware('auth');
        $aanvraag = Aanvragen::findOrFail($id);

        return view('dashboard.show',
            compact('aanvraag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->middleware('auth');
        $aanvraag = Aanvragen::findOrFail($id)->delete();
    }
}
