<?php

namespace App\Repositories\Passenger;
use App\Repositories\DbRepository;
use App\Passenger;
use App\Repositories\Booking\BookingRepository as Booking;

class DbPassengerRepository extends DbRepository implements PassengerRepository {

	/**
	*@var Passenger
	*/
	protected $model;

	/**
	 * @var Booking
	 */
	protected $booking;

	/**
	 * @param Passenger $model   
	 * @param Booking   $booking
	 */
	function __construct(Passenger $model, Booking $booking)
	{
		$this->model = $model;
		$this->booking = $booking;
	}

	/**
	 * Request user input
	 * create passenger
	 * save belongsto relationship with Booking model
	 * @param $request [request all user input]
	 * @param $id      [get booking id]
	 */
	public function addBookingDetail($request, $id)
    {
        $booking = $this->booking->getById($id);
        $givenInput = $request->all();
        $data = $this->model->create($givenInput);
    	$booking->passenger()->save($data);
    }
}