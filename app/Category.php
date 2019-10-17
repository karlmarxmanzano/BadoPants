<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Custom Primary Key for Category Table
     */
    protected $primaryKey = 'category_id';

    /**
     * For mass assignment
     */
    protected $fillable = ['category_name'];
}
