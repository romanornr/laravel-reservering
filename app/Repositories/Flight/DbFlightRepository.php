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


	public function addBookingDetail($request, $id)
	{
        $givenInput = $request->all();
        $data = $this->model->create($givenInput);
        $customer = Customer::find($id);
      	return Booking::create(['customer_id' => $customer->id,
                         		'flight_id' => $data->id]);
      	$data::rollback();
	}

}