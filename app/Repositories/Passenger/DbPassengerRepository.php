<?php

namespace App\Repositories\Passenger;
use App\Repositories\DbRepository;
use App\Passenger;
use App\Booking;

class DbPassengerRepository extends DbRepository implements PassengerRepository {
	/**
	*@var Passenger
	*/
	protected $model;

	/**
	*@param Passenger $model
	*/
	function __construct(Passenger $model)
	{
		$this->model = $model;
	}

	/**
 	* Find the booking id and create a passenger.
 	* Relation: Booking has many passengers
 	* @param $request [Request all user input]
 	* @param $id      [get booking id]
 	*/
	public function addBookingDetail($request, $id)
    {
        $booking = Booking::find($id);
        $givenInput = $request->all();
    	$data = $this->model->create(['booking_id' => $booking->id,
    								  'firstname' => $request->get('firstname'),
        							  'lastname' => $request->get('lastname'),
        							  'gender' => $request->get('gender'),
        							  'birthday' => $request->get('birthday')]);
    }
}