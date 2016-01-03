<?php 

namespace Repositories\CustomerRepo;

interface CustomerRepository {

	 /**
     * Fetch a record by id
     *
     * @param $id
     */
     public function getById($id);
}