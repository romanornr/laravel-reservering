<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Cost\CostRepository;
use App\Repositories\Booking\BookingRepository as Booking;

class CostController extends Controller
{
    /**
     * @var CostRepository
     */
    private $cost;
    public function __construct(CostRepository $cost, Booking $booking)
    {
        $this->middleware('auth');
        $this->cost = $cost;
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
        return view('booking.cost.create',compact('booking'));
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
        $this->cost->addBookingDetail($request, $id);

        \Session::flash('flash_message', 'Cost has been added');
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
    public function edit($id, $cost)
    {
        $booking = $this->booking->getById($id);
        $cost = $this->cost->getById($cost);
        return view('booking.cost.edit', compact('booking','cost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, $cost)
    {
       $booking = $this->booking->getById($id);
       $this->cost->getById($cost);
        $this->cost->updateRecord($request, $cost);
        $customer = $booking->customer_id;
       \Session::flash('flash_message', 'Cost record has been updated');
       return redirect()->action('CustomerController@show', [$customer]);
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
