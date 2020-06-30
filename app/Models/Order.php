<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\OrderItem;
use Models\Payment;
use Models\Shipping;
use Models\User;

class Order extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
