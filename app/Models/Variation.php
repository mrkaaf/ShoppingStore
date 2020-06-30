<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\VariationItem;

class Variation extends Model
{
    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(VariationItem::class);
    }
}
