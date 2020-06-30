<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\User;
use Models\Shipping;

class Address extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shippings()
    {
        return $this->hasMany(Shipping::class);
    }
}
