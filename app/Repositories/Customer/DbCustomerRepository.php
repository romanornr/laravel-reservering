<?php

namespace Repositories\Customer;
use Repositories\DbRepository;
use Customer;

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