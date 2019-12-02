<?php

namespace App\Repositories\Stores;

use App\Repositories\EloquentRepository;
use App\Repositories\Stores\StoreRepositoryInterface;
use App\Store;

class EloquentStoreRepository extends EloquentRepository implements StoreRepositoryInterface
{
	protected $model;

	public function __construct(Store $model)
	{
		$this->model = $model;
	}

	// public function store()
	// {
	// 	$this->model
	// }
}