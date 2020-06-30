<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\Order;
use Models\User;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
