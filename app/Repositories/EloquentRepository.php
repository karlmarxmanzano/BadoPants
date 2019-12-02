<?php

namespace App\Repositories;

abstract class EloquentRepository {

	protected $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function store(array $params)
	{
		return $this->model->create($params);
	}

	public function update(int $id, array $params)
	{
		return $this->model->find($id)->update($request);
	}

	public function delete($id)
	{
		return $this->model->delete($id);
	} 

	public function getAll()
	{
		return $this->model->all();
	}

	public function findById($id)
	{
		return $this->model->find($id);
	}
}