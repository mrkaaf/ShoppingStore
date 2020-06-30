<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\ProductItem;

class ProductItemImage extends Model
{
    protected $guarded = ['id'];

    public function product_item()
    {
        return $this->belongsTo(ProductItem::class);
    }
}
