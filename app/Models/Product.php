<?php

namespace CodeDeliver\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filalable = [
        'category_id',
        'name',
        'description',
        'price'
    ];


}
