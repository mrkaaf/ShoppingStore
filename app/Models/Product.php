<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\AttributeItem;
use Models\Category;
use Models\ProductItem;

class Product extends Model
{
    protected $guarded = ['id'];

    public function attributes()
    {
        return $this->hasMany(AttributeItem::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_items()
    {
        return $this->hasMany(ProductItem::class);
    }
}
