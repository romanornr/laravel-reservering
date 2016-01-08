<?php

namespace App\Repositories\Flight;
use App\Repositories\DbRepository;
use App\Flight;
use App\Customer;
use App\Booking;

class DbFlightRepository extends DbRepository implements FlightRepository {
	/**
	*@var Flight
	*/
	protected $model;

	/**
	*@param Flight $model
	*/
	function __construct(Flight $model)
	{
		$this->model = $model;
	}


	public function addBookingDetail($request)
	{
		//$givenInput = $request->all();
		//return $this->model->create($givenInput);

		//Customer::find($customer_id)->booking()->save($booking);
		//return $customer = Customer::find($customer_id);
		//$booking = new Booking([
        //'customer_id' => $request->get($customer_id)
        //]);
        //return $id;

        //return Customer::find($customer_id);
        return Customer::find($id);

        //Flight::find($flight_id)->booking()->save($booking);
	}

}