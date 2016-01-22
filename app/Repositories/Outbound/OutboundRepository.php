<?php


namespace App\Repositories\Outbound;

interface OutboundRepository
{
    /**
     * request userinput and create an outbound
     * Save belongsTo relationship with Flight model.
     *
     * @param $request [request all user input]
     * @param $id      [get booking id]
     */
    public function addBookingDetail($request, $id);

    /**
     * Delete a record by id.
     *
     * @param $id
     *
     * @return mixed
     */
    public function deleteByid($id);
}
