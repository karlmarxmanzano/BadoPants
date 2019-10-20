<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Item;

class Category extends Model
{

    /**
     * For mass assignment
     */
    protected $fillable = ['category_name'];

    public function items()
    {
    	return $this->belongsToMany(Item::class)->withTimestamps();
    }
}
