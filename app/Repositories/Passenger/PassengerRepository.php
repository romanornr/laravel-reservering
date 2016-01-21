<?php

namespace App\Repositories\Passenger;

interface PassengerRepository {

     /**
     * Fetch a record by id
     *
     * @param $id
     * @return mixed
     */
	public function getById($id);

     /**
     * Receive all records in order by creation date ascending
     *
     * @param $id
     * @return mixed 
     */
	public function getAll();

     /**
     * Delete a record by id
     *
     * @param $id
     * @return mixed 
     */
	public function deleteByid($id);

	/**
 	* Find the booking id and create a passenger.
 	* Relation: Booking has many passengers
 	* @param $request [Request all user input]
 	* @param $id      [get booking id]
 	*/
	public function addBookingDetail($request, $id);
}