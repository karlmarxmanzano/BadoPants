<?php

namespace App;

use App\Item;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['cost', 'quantity', 'total_cost'];

    public function items()
    {
    	return $this->hasMany(Item::class);
    }
}
