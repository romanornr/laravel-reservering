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
     * Receive all records in order by creation date ascending
     *
     * @param $id
     * @return mixed 
     */
     public function getBooking();

     public function getAll();

}