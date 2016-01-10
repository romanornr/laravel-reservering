<?php

namespace App\Repositories\Booking;
use App\Repositories\DbRepository;
use App\Booking;
use App\Customer;

class DbBookingRepository extends DbRepository implements BookingRepository {
	/**
	*@var Booking
	*/
	protected $model;

	/**
	*@param Booking $model
	*/
	function __construct(Booking $model)
	{
		$this->model = $model;
	}

	public function getBooking()
	{
		//$booking = Customer::find($id)->booking()->get();
		return $this->model->orderBy('created_at' ,'asc')->with('flight')->get();
		return $this->model->with('passenger')->get();
	}

}