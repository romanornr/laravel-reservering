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

	/**
	 * Find customer by their firstname
	 * or lastname or zipcode, or email or id
	 * @param  $query [user search input]
	 * @return array  [get 20 search results per page]
	 */
	 public function search($query) {
     
       return $this->model->where('lastname','LIKE',"%$query%")
       		->orWhere('firstname','LIKE',"%$query%")
       		->orWhere('zipcode','LIKE',"%$query%")
       		->orWhere('email', 'LIKE',"%$query%")
       		->orderBy('id', 'desc')
       		->paginate(20);
	}
}