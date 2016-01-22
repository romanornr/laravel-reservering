<?php 

namespace App\Repositories\Cost;

interface CostRepository {

	/**
	 * Add all the cost for the booking
	 * Save belongsTo relationship with Booking model
	 * @param $request [get user input]
	 * @param $id      [get booking id]
	 */
	public function addBookingDetail($request, $id);

}