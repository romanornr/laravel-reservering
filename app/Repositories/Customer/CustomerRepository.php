<?php 

namespace App\Repositories\Customer;

interface CustomerRepository {

	 /**
     * Fetch a record by id
     *
     * @param $id
     */
     public function getById($id);
     public function getAll();
}