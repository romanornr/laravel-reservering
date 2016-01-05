<?php 

namespace App\Repositories\Customer;

interface CustomerRepository {

	 /**
     * Fetch a record by id
     *
     * @param $id
     */
     public function getById($id);

     /**
     * Receive all records in order by creation date ascending
     *
     * @param $id
     * @return mixed 
     */
     public function getAll();

     /**
     * Delete a record by id
     *
     * @param $id
     * @return mixed 
     */
     public function deleteById($id);
}