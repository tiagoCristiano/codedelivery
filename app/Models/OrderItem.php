<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItens extends Model
{
    protected $filalable = [
        'product_id',
        'order_id',
        'qtd',
        'price'
    ];

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
