<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\ProductItem;
use Models\User;


class Wishlist extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(ProductItem::class);
    }
}
