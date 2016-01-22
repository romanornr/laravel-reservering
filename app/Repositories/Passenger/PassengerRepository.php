<?php

namespace App\Repositories\Passenger;

interface PassengerRepository
{
    /**
     * Fetch a record by id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function getById($id);

    /**
     * Receive all records in order by creation date ascending.
     *
     * @param $id
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Delete a record by id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function deleteByid($id);

    /**
     * Request user input
     * create passenger
     * save belongsto relationship with Booking model.
     *
     * @param $request [request all user input]
     * @param $id      [get booking id]
     */
    public function addBookingDetail($request, $id);
}
