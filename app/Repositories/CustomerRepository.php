<?php

namespace App\Repositories;

use App\Customer;
use auth;

class CustomerRepository {

	public function getById($id)
	{
		return $Customer = Customer::find($id);
	}

}