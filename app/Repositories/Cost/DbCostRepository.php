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
	*@param Cost $model
	*/
	function __construct(Cost $model, Booking $booking)
	{
		$this->model = $model;
		$this->booking = $booking;
	}

	public function addBookingDetail($request, $id)
	{
		$booking = $this->booking->getById($id);
        $givenInput = $request->all();
        $data = $this->model->create($givenInput);
        $data->booking()->save($booking);
	}
}