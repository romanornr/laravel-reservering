<?php

namespace App\Repositories\Passenger;

interface PassengerRepository {

	public function getById($id);

	public function getAll();

	public function deleteByid($id);

	public function addBookingDetail($request, $id);
}