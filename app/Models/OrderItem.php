<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\CustomerReview;
use Models\Order;
use Models\ProductItem;

class OrderItem extends Model
{
    protected $guarded = ['id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product_item()
    {
        return $this->belongsTo(ProductItem::class);
    }

    public function reviews()
    {
        return $this->hasOne(CustomerReview::class);
    }
}
