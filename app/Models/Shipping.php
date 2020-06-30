<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\Address;
use Models\Order;

class Shipping extends Model
{
    protected $guarded = ['id'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
