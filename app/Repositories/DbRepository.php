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
        return $this->model->orderBy('created_at' ,'desc')->paginate(5);
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

     /**
     * request all input and create new record
     *
     * 
     * @return mixed 
     */
	public function createNew($request)
	{
		$givenInput = $request->all();
		return $this->model->create($givenInput);
	}

     /**
     * request all (new) input and save updated record
     *
     * 
     * @return mixed 
     */
	public function updateRecord($request, $id)
	{
		$newInput = $request->all();
		return $this->model->find($id)->fill($newInput)->save();
	}
    
}