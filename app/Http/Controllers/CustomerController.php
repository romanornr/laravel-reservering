<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Booking\BookingRepository;
use Auth;

class CustomerController extends Controller
{

    /**
     * @var CustomerRepository
     */
    private $customer;
    public function __construct(CustomerRepository $customer, BookingRepository $booking)
    {
        $this->middleware('auth');
        $this->booking = $booking;
        $this->customer = $customer;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = $this->customer->getAll();
        return view('customer.index', compact('customer')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = $this->customer->createNew($request);
        \Session::flash('flash_message', 'New customer has been created');
         return redirect('customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = $this->customer->getById($id);
        $booking = $this->booking->getAll();
        return view('customer.show', compact('customer','booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = $this->customer->getById($id);
        return view('customer.edit', compact('customer'));
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
        $this->customer->updateRecord($request, $id);
        $customer = $this->customer->getById($id);
        \Session::flash('flash_message', 'Customer record has been updated');
        return view('customer.show', compact('customer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customer->deleteById($id);
        \Session::flash('flash_message', 'De klant is verwijderd uit de database!');
        return redirect('customer');
    }
}
