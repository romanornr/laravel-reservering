<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Outbound\OutboundRepository;
use App\Repositories\Booking\BookingRepository as Booking;
use Auth;

class OutboundController extends Controller
{

    /**
     * @var OutboundRepository
     */
    private $outbound;
    private $flight;
    public function __construct(OutboundRepository $outbound, Booking $booking)
    {
        $this->middleware('auth');
        $this->outbound = $outbound;
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
        $flight = $this->booking->getById($id)->flight_id;
        return view('booking.outbound.create',compact('booking','flight'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $customer = $this->booking->getById($id)->customer_id;
        $outbound = $this->outbound->addBookingDetail($request, $id);
        \Session::flash('flash_message', 'Flight has been added !');
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
