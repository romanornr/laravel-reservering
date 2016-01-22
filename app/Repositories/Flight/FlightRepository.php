<?php


namespace App\Repositories\Flight;

interface FlightRepository
{
    /**
     * Creating a flight from user input.
     * Create a new booking and push $customer->id
     * and flight->id in.
     *
     * @param $request [request user input]
     * @param $id      [getting customer id]
     */
    public function addBookingDetail($request, $id);
}
