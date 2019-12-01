<?php

namespace App;

use App\Category;
use App\Order;
use App\Cart;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['item_name', 'item_description', 'cost'];

    public function categories()
    {
    	return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function carts()
	{
        return $this->hasMany(Cart::class);
	}

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
