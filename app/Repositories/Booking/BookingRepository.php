<?php 

namespace App\Repositories\Booking;

interface BookingRepository {

     /**
     * Fetch a record by id
     *
     * @param $id
     */
     public function getById($id);

     /**
     * Eloquent Eager Loading to solve N + 1 query problem.
     * Get all bookings details via customer id
     * Receive all records in order by creation date ascending
     * @param  $id [customer id]
     * @return mixed [flight, passenger, outbound, cost]
     */
     public function getBooking($id);

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

}