<?php

namespace App\Repositories\Outbound;
use App\Repositories\DbRepository;
use App\Repositories\FlightRepository;


class DbOutboundRepository extends DbRepository implements OutboundRepository {
	/**
	*@var Outbound
	*/
	protected $model;

	/**
	*@param $model
	*/
	function __construct(Outbound $model)
	{
		$this->model = $model;
	}

}