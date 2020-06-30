<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\OrderItem;
use Models\Product;
use Models\ProductItemImage;
use Models\User;
use Models\VariationItem;
use Models\Wishlist;

class ProductItem extends Model
{
    protected $guarded = ['id'];


    public function order_items()
    {
        return $this->HasMany(OrderItem::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function wishlist()
    {
        return $this->hasManyThrough(User::class, Wishlist::class);
    }

    public function images()
    {
        return $this->hasMany(ProductItemImage::class);
    }

    public function variations()
    {
        return $this->hasMany(VariationItem::class);
    }
}
