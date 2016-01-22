<?php

namespace App\Repositories\Cost;
use App\Repositories\DbRepository;
use App\Repositories\Booking\BookingRepository as Booking;
use App\Cost;

class DbCostRepository extends DbRepository implements CostRepository {
	/**
	*@var Cost
	*/
	protected $model;

	/**
	 * @var Booking
	 */
	protected $booking;

	/**
	*@param Cost $model
	*@param Booking $booking
	*/
	function __construct(Cost $model, Booking $booking)
	{
		$this->model = $model;
		$this->booking = $booking;
	}

	/**
	 * Add all the cost for the booking
	 * Save belongsTo relationship with Booking model
	 * @param $request [get user input]
	 * @param $id      [get booking id]
	 */
	public function addBookingDetail($request, $id)
	{
		$booking = $this->booking->getById($id);
        $givenInput = $request->all();
        $data = $this->model->create($givenInput);
        $data->booking()->save($booking);
	}
}