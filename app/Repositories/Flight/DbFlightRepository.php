<?php

namespace App\Repositories\Flight;
use App\Repositories\DbRepository;
use App\Repositories\Customer\CustomerRepository as Customer;
use App\Flight;
use App\Booking;

class DbFlightRepository extends DbRepository implements FlightRepository {
	/**
	*@var Flight
	*/
	protected $model;

	/**
	 * @var Customer
	 */
	protected $customer;

	/**
	*@param Flight $model
	*@param Customer $customer
	*/
	function __construct(Flight $model, Customer $customer)
	{
		$this->model = $model;
		$this->customer = $customer;
	}

	/**
	 * Creating a flight from user input.
	 * Create a new booking and push $customer->id
	 * and flight->id in
	 * @param $request [request user input]
	 * @param $id      [getting customer id]
	 */
	public function addBookingDetail($request, $id)
	{
        $givenInput = $request->all();
        $data = $this->model->create($givenInput);
        $customer = $this->customer->getById($id);
      	return Booking::create(['customer_id' => $customer->id,
                         		'flight_id' => $data->id]);
	}
}