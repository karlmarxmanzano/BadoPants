<?php

namespace App\Repositories\Categories;

use App\Repositories\EloquentRepository;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Category;

class EloquentCategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
	protected $model;

	public function __construct(Category $model)
	{
		return $this->model = $model;
	}
}