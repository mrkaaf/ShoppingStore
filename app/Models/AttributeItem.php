<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\Attribute;
use Models\Product;

class AttributeItem extends Model
{
    protected $guarded = ['id'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
