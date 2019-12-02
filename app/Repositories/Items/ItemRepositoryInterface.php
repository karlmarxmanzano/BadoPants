<?php

namespace App\Repositories\Items;

interface ItemRepositoryInterface
{
	public function getAll();
	
	public function findById($id);
}