<?php

namespace App;

use App\Category;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item_name', 'item_description', 'cost'];

    public function categories()
    {
    	return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function orders()
	{
		return $this->belongsTo(Order::class);
	}
}
