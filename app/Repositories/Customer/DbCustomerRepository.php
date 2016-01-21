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

	 public function search($query) {

        // Sets the parameters from the get request to the variables.
       
       return $this->model->where('lastname','LIKE',"%$query%")
       		->orWhere('firstname','LIKE',"%$query%")
       		->orWhere('zipcode','LIKE',"%$query%")
       		->orderBy('id', 'desc')
       		->paginate(2);
	}
}