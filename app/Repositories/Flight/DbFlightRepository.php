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
		//Customer::find($customer_id)->booking()->save($booking);
		//return $customer = Customer::find($customer_id);
		//$booking = new Booking([
        //'customer_id' => $request->get($customer_id)
        //]);
        //return $id;

        //return Customer::find($customer_id);
		//return $var = $this->model->find($id);
     //   $customer = Customer::find($id);
        //return $this->model->booking()->save($var);
       	$givenInput = $request->all();
		$data = $this->model->create($givenInput);
		//return $data->id;
      	return $add = $this->model->booking()->create($data);

     //return $this->model->booking();


	}

}