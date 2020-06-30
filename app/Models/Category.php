<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\Product;
use Models\Category;

class Category extends Model
{
    protected $guarded = ['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
