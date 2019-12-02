<?php

namespace App\Repositories\Categories;

interface CategoryRepositoryInterface
{
	public function getAll();

	public function findById($id);
}