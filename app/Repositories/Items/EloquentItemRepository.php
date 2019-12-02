<?php

namespace App\Repositories\Items;

use App\Item;
use App\Repositories\Items\ItemRepositoryInterface;
use App\Repositories\EloquentRepository;

class EloquentItemRepository extends EloquentRepository implements ItemRepositoryInterface
{
	protected $model;

	public function __construct(Item $model)
	{
		$this->model = $model;
	}
}