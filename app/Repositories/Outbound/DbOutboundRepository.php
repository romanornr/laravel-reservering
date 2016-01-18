<?php

namespace App\Repositories\Outbound;
use App\Repositories\DbRepository;
use App\Repositories\Flight\FlightRepository as Flight;
use App\Outbound;

class DbOutboundRepository extends DbRepository implements OutboundRepository {
	/**
	*@var Outbound
	*/
	protected $model;

	/**
	*@param $model
	*/
	function __construct(Outbound $model, Flight $flight)
	{
		$this->model = $model;
		$this->flight = $flight;
	}

	public function addBookingDetail($request, $id)
    {
        $flight = $this->flight->getById($id);
        $givenInput = $request->all();
    	$data = $this->model->create(['flight_id' => $flight->id,
    								  'flight_number' => $request->get('flight_number'),
        							  'departure' => $request->get('departure'),
        							  'arrival' => $request->get('arrival'),
        							  'departure_time' => $request->get('departure_time'),
        							  'arrival_time' => $request->get('arrival_time'),
        							  'is_return' => $request->get('is_return')]);
    }

}