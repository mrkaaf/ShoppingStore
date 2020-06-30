<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

use Models\AttributeItem;

class Attribute extends Model
{
    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(AttributeItem::class);
    }
}
