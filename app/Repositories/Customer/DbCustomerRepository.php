<?php

namespace App\Repositories\Customer;
use App\Repositories\DbRepository;
use App\Customer;

class DbCustomerRepository extends DbRepository implements CustomerRepository {
	/**
	*@var Customer
	*/
	protected $model;

	/**
	*@param Customer $model
	*/
	function __construct(Customer $model)
	{
		$this->model = $model;
	}

}