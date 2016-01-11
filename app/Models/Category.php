<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use CodeDelivery\Models\Product;

class Category extends Model
{
    protected $filalable = [
        'name'
    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }


}
