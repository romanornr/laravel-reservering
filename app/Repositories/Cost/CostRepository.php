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

	/**
    * Fetch a record by id
    *
    * @param $id
    * @return mixed
    */
	public function getById($id);

	/**
    * request all (new) input and save updated record
    *
    * 
    * @return mixed 
    */
	public function updateRecord($request, $id);

}