<?php

namespace App\Repositories\Stores;

interface StoreRepositoryInterface
{
	public function store(array $params);

	public function getAll();

	public function findById($id);
}