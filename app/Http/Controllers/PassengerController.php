<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Passenger\PassengerRepository;
use App\Repositories\Booking\BookingRepository;
use Auth;

class PassengerController extends Controller
{
    /**
     * @var PassengerRepository
     */
    private $passenger;
    public function __construct(PassengerRepository $passenger, BookingRepository $booking)
    {
        $this->middleware('auth');
        $this->passenger = $passenger;
        $this->booking = $booking;
    } 

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
    public function create($id)
    {
        $booking = $this->booking->getById($id);
        return view('booking.passenger.create', compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
    	$booking = $this->booking->getById($id);
    	$customer = $booking->customer_id;
        $passenger = $this->passenger->addBookingDetail($request, $id);
        \Session::flash('flash_message', 'New passenger has been created');
        return redirect()->action('CustomerController@show', [$customer]);
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
