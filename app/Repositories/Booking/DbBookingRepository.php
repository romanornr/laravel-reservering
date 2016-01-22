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

	/**
	 * Eloquent Eager Loading to solve N + 1 query problem.
	 * Get all bookings details via customer id
	 * Receive all records in order by creation date ascending
	 * @param  $id [customer id]
	 * @return mixed [flight, passenger, outbound, cost]
	 */
	public function getBooking($id)
	{
		return $this->model->where('customer_id', $id)->orderBy('id' ,'desc')->with('flight','passenger','outbound','cost')->get();
	}

}