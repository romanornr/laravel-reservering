<?php

namespace App\Repositories;

abstract class DbRepository {

    /**
     * Eloquent model
     */
    protected $model;
    /**
     * @param $model
     */
    function __construct($model)
    {
    	$this->model = $model;
    }

     /**
     * Fetch a record by id
     *
     * @param $id
     * @return mixed
     */

	public function getById($id)
	{
		return $this->model->find($id);
	}

     /**
     * Receive all records in order by creation date ascending
     *
     * @param $id
     * @return mixed 
     */

	public function getAll()
	{
		//return $this->model->all();
        return $this->model->orderBy('created_at' ,'asc')->paginate(50);
	}

     /**
     * Delete a record by id
     *
     * @param $id
     * @return mixed 
     */
	public function deleteByid($id)
	{
		return $this->model->find($id)->delete();
	}
}