<?php


namespace App\Repositories\Customer;

interface CustomerRepository
{
    /**
      * Fetch a record by id.
      *
      * @param $id
      */
     public function getById($id);

     /**
      * Receive all records in order by creation date ascending.
      *
      * @param $id
      *
      * @return mixed 
      */
     public function getAll();

     /**
      * Delete a record by id.
      *
      * @param $id
      *
      * @return mixed 
      */
     public function deleteById($id);

    /**
     * request all input and create new record.
     *
     * 
     * @return mixed
     */
    public function createNew($request);

     /**
      * request all (new) input and save updated record.
      *
      * 
      * @return mixed 
      */
     public function updateRecord($request, $id);

     /**
      * Find customer by their firstname
      * or lastname or zipcode, or email or id.
      *
      * @param  $query [user search input]
      *
      * @return array  [get 20 search results per page]
      */
     public function search($query);
}
