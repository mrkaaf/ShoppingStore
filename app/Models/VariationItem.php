<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\ProductItem;
use Models\Variation;

class VariationItem extends Model
{
    protected $guarded = ['id'];

    public function variation()
    {
        return $this->belongsTo(Variation::class);
    }

    public function product_items()
    {
        return $this->belongsTo(ProductItem::class);
    }
}
