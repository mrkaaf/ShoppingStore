<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;


use Models\OrderItem;
use Models\User;

class CustomerReview extends Model
{
    protected $guarded = ['id'];

    public function order_item()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
