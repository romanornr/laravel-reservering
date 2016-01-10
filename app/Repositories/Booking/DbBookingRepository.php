<?php

namespace App\Repositories\Booking;
use App\Repositories\DbRepository;
use App\Booking;

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

}