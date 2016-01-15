<?php

namespace App\Repositories\Cost;
use App\Repositories\DbRepository;
use App\Cost;

class DbCostRepository extends DbRepository implements CostRepository {
	/**
	*@var Cost
	*/
	protected $model;

	/**
	*@param Cost $model
	*/
	function __construct(Cost $model)
	{
		$this->model = $model;
	}

}